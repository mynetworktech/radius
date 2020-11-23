<?php

namespace MyNetworkTech\Freeradius\Models;

use Illuminate\Database\Eloquent\Model;

class RadReply extends Model
{
    protected $table = 'radreply';

    public function getConnectionName()
    {
        return config('radius.database.connection');
    }
}