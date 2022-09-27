<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChannelUsed extends Model
{
    use HasFactory;
    public function Channels()
    {
        return $this->hasMany(Channel::class);
    }
    public function RoomsFromChannel()
    {
        return $this->hasMany(Room::class);
    }
}
