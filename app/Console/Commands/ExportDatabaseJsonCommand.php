<?php

namespace App\Console\Commands;

use App\Http\Resources\BakuganCollectionResource;
use App\Models\Bakugan;
use Illuminate\Console\Command;

class ExportDatabaseJsonCommand extends Command
{
    public const PATH = 'bakugan.json';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:export-database-json';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export the current database as a JSON file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $list = Bakugan::query()
            ->orderBy('id')
            ->getModels();

        $list = new BakuganCollectionResource($list);

        $res = file_put_contents(public_path(static::PATH), json_encode($list));

        return $res ? static::SUCCESS : static::FAILURE;
    }
}
