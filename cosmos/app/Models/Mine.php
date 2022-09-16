<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mine extends Model
{
    use HasFactory;
    public function getNation()
    {
        return $this->belongsTo(Nation::class, 'nation_id', 'id');
    }
    public function getSpaceCrafts()
    {
        return $this->belongsToMany(Spacecraft::class);
    }
}
