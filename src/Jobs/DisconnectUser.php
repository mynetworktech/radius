<?php

namespace MyNetworkTech\Freeradius\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use MyNetworkTech\Freeradius\Traits\ProcessCommand;
use Symfony\Component\Process\Process;

class DisconnectUser implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, ProcessCommand, Queueable;

    private $username;
    private $ipAddress;
    private $nasIpAddress;
    private $nasPort;
    private $nasSecret;

    public function __construct(
        string $username,
        string $ipAddress,
        string $nasIpAddress,
        int $nasPort,
        string $nasSecret
    ) {
        $this->username = $username;
        $this->ipAddress = $ipAddress;
        $this->nasIpAddress = $nasIpAddress;
        $this->nasPort = $nasPort;
        $this->nasSecret = $nasSecret;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->run();
    }

    public function command(array $params = []): string
    {
        list($username, $ipAddress, $nasIpAddress, $nasPort, $nasSecret) = $params;

        return "echo User-Name={$username},Framed-IP-Address={$ipAddress} | radclient -x {$nasIpAddress}:{$nasPort} disconnect {$nasSecret}";
    }

    public function params(): array
    {
        return [
            'username' => $this->username,
            'ipAddress' => $this->ipAddress,
        ];
    }
}
