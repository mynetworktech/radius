<?php

namespace MyNetworkTech\Freeradius\Models;

use Illuminate\Database\Eloquent\Model;

class RadCheck extends Model
{
    protected $table = 'radcheck';

    public function getConnectionName()
    {
        return config('radius.database.connection');
    }
}