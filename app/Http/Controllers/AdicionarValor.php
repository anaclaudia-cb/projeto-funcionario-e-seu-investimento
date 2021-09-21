<?php

namespace App\Http\Controllers;

use App\Models\Valors;
use Illuminate\Support\Facades\DB;

class AdicionarValor extends Controller
{
    public function adicionarValor(
        string $valor

    ) : Valors
    {
        $valor = null;
        DB::beginTransaction();
        $valor= Valors::create(['valor' => $valor]);
        DB::commit();


        return $valor;

    }
}
