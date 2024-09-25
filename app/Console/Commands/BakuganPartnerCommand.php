<?php

namespace App\Console\Commands;

use App\Actions\BakuganPartnerAction;
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
    public function handle(BakuganPartnerAction $action): void
    {
        $birthday = $this->getBirthday();

        $this->line("Your Bakugan partner is...");

        $partner = spin(fn() => $action($birthday));

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

        return $this->asDate($birthday);
    }

    private function getBirthday(): Carbon
    {
        $arg = $this->argument('birthday');

        try {
            $date = $this->asDate($arg);
            return $date;
        } catch(\Throwable $e) {
            return $this->askBirthday();
        }
    }

    protected function asDate(string $date): Carbon {
        return Date::createFromFormat('Y-m-d', $date)
            ->startOfDay();
    }
}
