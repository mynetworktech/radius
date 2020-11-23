<?php

namespace MyNetworkTech\Freeradius\Models;

use Illuminate\Database\Eloquent\Model;

class RadGroupReply extends Model
{
    protected $table = 'radgroupreply';

    public function getConnectionName()
    {
        return config('radius.database.connection');
    }
}