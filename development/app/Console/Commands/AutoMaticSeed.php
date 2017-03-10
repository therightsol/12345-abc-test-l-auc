<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AutoMaticSeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'automaticseed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically migrate and seed.';

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
     * @return mixed
     */
    public function handle()
    {
        //
        //$this->call('php artisan help migrate');

    }
}
