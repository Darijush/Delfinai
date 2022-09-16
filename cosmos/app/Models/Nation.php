<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nation extends Model
{
    use HasFactory;
    public function getMines()
    {
        return $this->hasMany(Mine::class, 'nation_id', 'id');
    }
    public function getSpacecrafts()
    {
        return $this->hasMany(Spacecraft::class, 'nation_id', 'id');
    }
    public function getNationBlock()
    {
        return $this->belongsTo(Nationsblock::class, 'nationsblock_id', 'id');
    }
}
