<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spacecraft extends Model
{
    use HasFactory;
    public function getMines()
    {
        return $this->belongsToMany(Mine::class);
    }
    public function getNation()
    {
        return $this->belongsTo(Nation::class, 'nation_id', 'id');
    }
}
