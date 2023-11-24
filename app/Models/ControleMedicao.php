<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControleMedicao extends Model
{
    // use HasFactory;
    protected $table = 'obra_controle_medicao';
    protected $fillable = [
        'n_processo',
        'dt_entrada',
        'valor_medido',
        'dt_inicio_medicao',
        'dt_final_medicao',
        'glosa_desglosa',
        'valor_fatura',  
        'pg_empenho',
        'empresa',
        'objeto',
        'secretaria',
        'localizacao',
        'observacoes',
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
