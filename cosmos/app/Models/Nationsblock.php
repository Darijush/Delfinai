<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationsblock extends Model
{
    use HasFactory;
    public function getNations()
    {
        return $this->hasMany(Nation::class, 'nation_id', 'id');
    }
}
