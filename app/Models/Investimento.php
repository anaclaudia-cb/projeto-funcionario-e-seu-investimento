<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investimento extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome', 'tipo'];
    public function funcionarios()
    {
        return $this->belongsToMany(Funcionario::class)->withPivot('valor');

    }
}
