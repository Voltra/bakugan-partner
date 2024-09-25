<?php

namespace App\Console\Commands\Aliases;

use App\Console\Commands\BakuganPartnerCommand;
use Illuminate\Console\Command;

class BakuganGuardianCommand extends BakuganPartnerCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bakugan:guardian';
}
