<?php

namespace MyNetworkTech\Freeradius\Traits;

use Symfony\Component\Process\Process;

trait ProcessCommand
{
    abstract public function command(array $params = []): string;

    abstract public function params(): array;

    public function run()
    {
        $process = new Process([$this->command($this->params())]);
        $process->run();

        if ($process->isSuccessful()) {
            logs()->info($process->getOutput());
        } else {
            logs()->error($process->getErrorOutput());
        }
    }
}