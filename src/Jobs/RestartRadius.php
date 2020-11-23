<?php

namespace MyNetworkTech\Freeradius\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use MyNetworkTech\Freeradius\Traits\ProcessCommand;

class RestartRadius implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, ProcessCommand, Queueable;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->onQueue('radius');
    }

    /**
     * Execute the job.
     *
     * @return void
     * @throws \Throwable
     */
    public function handle()
    {
        $this->run();
    }

    public function command(array $params = []): string
    {
        return "service freeradius reload";
    }

    public function params(): array
    {
        return [];
    }
}
