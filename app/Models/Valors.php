<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valors extends Model
{
    public $timestamps = false;
    protected $fillable = ['valor'];
    public function valor()
    {
        return $this->hasMany(Valors::class);
    }
}
