<?php

namespace MyNetworkTech\Freeradius\Models;

use Illuminate\Database\Eloquent\Model;

class RadGroupCheck extends Model
{
    protected $table = 'radgroupcheck';

    public function getConnectionName()
    {
        return config('radius.database.connection');
    }
}