<?php

namespace MyNetworkTech\Freeradius\Models;

use Illuminate\Database\Eloquent\Model;

class RadPostAuth extends Model
{
    protected $table = 'radpostauth';

    public function getConnectionName()
    {
        return config('radius.database.connection');
    }
}