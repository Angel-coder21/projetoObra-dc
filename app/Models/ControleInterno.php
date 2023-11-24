<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControleInterno extends Model
{
    // use HasFactory;
    protected $table = 'obra_controle_interno';
    protected $fillable = [
        'empresa',
        'solicitante',
        'objeto',
        'local',
        'data',
        'situacao',
        'descricao',
        'status',             
    ];
    
    protected $hidden = [
        '_token',
     
    ];

    protected $casts = [
        //
     ];
}
