<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class FuncionarioInvestimento extends Pivot
{
    protected $table = 'funcionario_investimento';
    protected $fillable = ['funcionarios_id','investimentos_id', 'valor'];

}
