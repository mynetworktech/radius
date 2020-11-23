<?php

namespace MyNetworkTech\Freeradius\Models;

use Illuminate\Database\Eloquent\Model;

class RadUserGroup extends Model
{
    protected $table = 'radusergroup';

    public function getConnectionName()
    {
        return config('radius.database.connection');
    }
}