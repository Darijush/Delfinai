<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Synchronization extends Model
{
    use HasFactory;
    public function channelForReservation()
    {
        return $this->belongsTo(Channel::class, 'channel_id', 'id');
    }
    public function reservationForChannel()
    {
        return $this->belongsTo(Reservation::class, 'reservation_id', 'id');
    }
}
