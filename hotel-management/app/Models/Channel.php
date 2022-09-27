<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;
    public function doSynchronization()
    {
        return $this->belongsTo(Synchronization::class, 'channel_id', 'id');
    }
    public function doChannelUsed()
    {
        return $this->belongsTo(ChannelUsed::class, 'channel_id', 'id');
    }
    public function Rooms()
    {
        return $this->belongsToMany(Room::class);
    }
}
