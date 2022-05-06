<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    //use HasFactory;
    protected $table="partida";
    protected $primaryKey="IdPartida";
    protected $fillable=[
        'IdJugador1','IdJugador2','C1','C2','C3','C4','C5','C6','C7','C8','C9'
    ];
    
    public $timestamps=false;
}
