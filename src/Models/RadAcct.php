<?php

namespace MyNetworkTech\Freeradius\Models;

use Illuminate\Database\Eloquent\Model;

class RadAcct extends Model
{
    protected $table = 'radacct';

    public function getConnectionName()
    {
        return config('radius.database.connection');
    }
}