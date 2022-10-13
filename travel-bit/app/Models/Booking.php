<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['hotel_id', 'user_id', 'confirmation'];

    public function getHotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id', 'id');
    }
    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function checkStatus($num)
    {
        if ($num == 0) {
            return 'Pending';
        } elseif ($num == 1) {
            return 'Confirmed';
        } elseif ($num == 2) {
            return 'Canceled';
        } else {
            return 'error';
        };
    }
}
