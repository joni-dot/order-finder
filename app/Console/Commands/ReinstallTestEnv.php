<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ReinstallTestEnv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:reinstall';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reinstall test environment.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Reinstalling testing environment...');

        $this->info('Migrating database...');
        $this->call('migrate:fresh');

        $this->info('Seeding data to the database...');
        $this->call('db:seed');

        $this->info('Reinstalling complete!');
    }
}
