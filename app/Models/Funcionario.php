<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'email'];
    public function investimentos()
    {
        return $this->belongsToMany(Investimento::class)->withPivot('valor');

    }

}
