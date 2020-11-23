<?php

namespace MyNetworkTech\Freeradius\Models;

use Illuminate\Database\Eloquent\Model;

class Nas extends Model
{
    protected $table = 'nas';

    public function getConnectionName()
    {
        return config('radius.database.connection');
    }
}