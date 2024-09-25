<?php

namespace App\Console\Commands;

use App\Enums\BakuganAttribute;
use App\Enums\BakuganSeason;
use App\Models\Bakugan;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Date;
use function Laravel\Prompts\select;
use function Laravel\Prompts\spin;
use function Laravel\Prompts\text;

/**
 * @return array<int, int>
 */
function customInclRange(int $from, int $to): array
{
    $ret = [];

    for ($i = $from; $i <= $to; $i += 1) {
        $ret[$i] = $i;
    }

    return $ret;
}

function pickInt(int $max): int {
    $pick = text(
        label: "Pick a number between 1 and $max",
        default: 1,
        required: true,
        validate: ['int', 'min:1', "max:$max"],
    );

    return intval($pick);
}

class BakuganPartnerCommand extends Command implements PromptsForMissingInput
{
    public const CALIBRATION_KEY = 239970; //NOTE: DO NOT TOUCH UNDER ANY CIRCUMSTANCES

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bakugan:partner {birthday}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Know who your Bakugan partner is!';

    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            'birthday' => fn() => $this->askBirthday(),
        ];
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $birthday = $this->getBirthday();

        $randomSeed = $birthday->getTimestampMs() + static::CALIBRATION_KEY;

        $this->line("Your Bakugan partner is...");

        $partner = spin(fn() => Cache::rememberForever($randomSeed, function() use ($birthday, $randomSeed) {
            srand($randomSeed);
            mt_srand($randomSeed);

            $season = $this->pickSeason($birthday);
            $attribute = $this->pickAttribute($birthday, $season);
            return $this->pickPartner($birthday, $season, $attribute);
        }));

        $this->info("{$partner->full_name}");

        $this->newLine();

        $this->line("Check it out on google: \n$partner->img_search_url");
    }

    protected function askBirthday(): Carbon
    {
        $birthday = text(
            label: "When's your birthday? (format: YYYY-MM-DD, e.g. 1998-12-15)",
            placeholder: "YYYY-MM-DD",
            required: true,
            validate: ['birthday' => 'date_format:Y-m-d'],
            hint: "YYYY-MM-DD",
        );

        return Date::createFromFormat("Y-m-d", $birthday)
            ->startOfDay();
    }

    protected function pickSeason(Carbon $birthday): BakuganSeason
    {
        $seasons = BakuganSeason::cases();
        shuffle($seasons);
        $seasonsCount = count($seasons);

        $seasonPosition = (($birthday->year + 1) % $seasonsCount) + 1;

        return $seasons[$seasonPosition - 1];
    }

    protected function pickAttribute(Carbon $birthday, BakuganSeason $season): BakuganAttribute
    {
        // We want the attributes that are available in this season.
        // We do this for two reasons:
        //  - Attributeless are not in every season
        //  - Some season might not feature a given attribute from some reason
        $attributes = spin(
            fn() => Cache::rememberForever("attributes-for-{$season->name}", fn() => Bakugan::whereSeason($season)
                ->distinct()
                ->pluck('attribute')
                ->sortBy('value')
                ->toArray()),
        );

        shuffle($attributes);
        $attributesCount = count($attributes);

        $attributePosition = (($birthday->month + 1) % $attributesCount) + 1;

        return $attributes[$attributePosition - 1];
    }

    protected function pickPartner(Carbon $birthday, BakuganSeason $season, BakuganAttribute $attribute): Bakugan
    {
        $bakugans = spin(
            fn() => Cache::rememberForever(
                "bakugans-in-{$season->name}-for-{$attribute->name}",
                fn() => Bakugan::query()
                    ->where('season', $season->value)
                    ->where('attribute', $attribute->value)
                    ->orderBy('name')
                    ->getModels(),
            ),
        );

        shuffle($bakugans);

        $bakugansCount = count($bakugans);

        if ($bakugansCount <= 2) {
            return $bakugans[0];
        }

        $bakuganPosition = (($birthday->day + 1) % $bakugansCount) + 1;

        return $bakugans[$bakuganPosition - 1];
    }

    private function getBirthday(): Carbon
    {
        $arg = $this->argument('birthday');

        try {
            $date = Date::createFromFormat('Y-m-d', $arg)
                ->startOfDay();
            return $date;
        } catch(\Throwable $e) {
            return $this->askBirthday();
        }
    }
}
