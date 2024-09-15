<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;

class ImportCountries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:import-countries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import countries SQL data before running migrations';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filePath = base_path('database/backup/countries.sql');

        if(File::exists($filePath)) {
            $sql = File::get($filePath);
            DB::unprepared($sql);
            $this->info('Countries data imported successfully.');
        } else {
            $this->error('SQL file not found!');
        }
    }
}
