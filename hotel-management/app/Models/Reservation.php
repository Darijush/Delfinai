<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public function makeSynchronization()
    {
        return $this->hasMany(Synchronization::class, 'reservation_id', 'id');
    }
    public function checkReservationStatus()
    {
        return $this->hasMany(ReservationStatusEvent::class,'reservation_id', 'id');
    }
}
