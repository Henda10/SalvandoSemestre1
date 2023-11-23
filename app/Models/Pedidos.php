<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;
    public function Clientes(){
        return $this->belongsTo(Clientes::class);
    }
    public function Servicios(){
        return $this->belongsTo(Servicios::class);
    }
}
