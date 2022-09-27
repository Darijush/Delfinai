<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public function Channels()
    {
        return $this->belongsToMany(Channel::class);
    }
    public function getChannelUsed()
    {
        return $this->belongsTo(ChannelUsed::class, 'channel_id', 'id');
    }
}
