<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    // use HasFactory;
    protected $table = 'obra_processo';
    protected $fillable = [
        'n_processo',
        'credor',
        'objeto',
        'valor',
        'prazo',
        'dt_abertura',
        'dt_inicio',
        'dt_termino',
        'n_empenho', 
        'dt_empenho',
        'n_liquidacao',
        'dt_liquidacao',
        'dt_pagamento',
        'tipo_doc',
        'local',
        'situacao',
        'pasta',
        'observacoes',
        'descricao',
        'status',
        'fk_usuario_criador',
        'fk_usuario_modificador',            
    ];
    
    protected $hidden = [
        '_token',
     
    ];

    protected $casts = [
        //
     ];
}
