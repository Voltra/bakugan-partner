<?php

namespace App\Console\Commands;

use App\Actions\BakuganPartnerAction;
use App\Models\Bakugan;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
use Throwable;

use function Laravel\Prompts\spin;
use function Laravel\Prompts\text;

class BakuganPartnerCommand extends Command implements PromptsForMissingInput
{
    public const DATE_FORMAT = 'Y-m-d';

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
            'birthday' => fn () => $this->promptBirthday(),
        ];
    }

    /**
     * Execute the console command.
     */
    public function handle(BakuganPartnerAction $action): void
    {
        $birthday = $this->getBirthday();

        $this->line('Your Bakugan partner is...');

        $partner = spin(fn (): Bakugan => $action($birthday));

        $this->info("{$partner->full_name}");

        $this->newLine();

        $this->line("Check it out on google: \n$partner->img_search_url");
    }

    protected function promptBirthday(): Carbon
    {
        $birthday = text(
            label: "When's your birthday? (format: YYYY-MM-DD, e.g. 1998-12-15)",
            placeholder: 'YYYY-MM-DD',
            required: true,
            validate: ['birthday' => 'date_format:'.static::DATE_FORMAT],
            hint: 'YYYY-MM-DD',
        );

        return $this->asDate($birthday);
    }

    private function getBirthday(): Carbon
    {
        $arg = $this->argument('birthday');

        try {
            $date = $this->asDate($arg);

            return $date === false ? $this->promptBirthday() : $date;
        } catch (Throwable $e) {
            return $this->promptBirthday();
        }
    }

    protected function asDate(string $date): false|Carbon
    {
        return Date::createFromFormat(static::DATE_FORMAT, $date)
            ->startOfDay();
    }
}
