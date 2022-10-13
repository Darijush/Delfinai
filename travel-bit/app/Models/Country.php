<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['title','season_id'];
    public function hasHotels()
    {
        return $this->hasMany(Hotel::class, "country_id", 'id');
    }
}
