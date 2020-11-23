<?php

namespace MyNetworkTech\Freeradius\Console;

use Illuminate\Console\Command;
use MyNetworkTech\Freeradius\Jobs\RestartRadius;

class RadiusRestartCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'radius:restart';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Restart freeradius server';

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
        $this->info('Restarting radius server...');

        RestartRadius::dispatchNow();

        $this->info('Radius server restarted successfully!');

        return 1;
    }
}
