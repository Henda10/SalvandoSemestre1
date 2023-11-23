<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotocicleGuy extends Model
{
    use HasFactory;
    public function motos(){
        return $this->belongsTo(Motos::class);
    }
}
