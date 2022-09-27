<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationStatusEvent extends Model
{
    use HasFactory;
    public function getReservationStatus()
    {
        return $this->belongsTo(Reservation::class, 'reservation_id', 'id');
    }

}
