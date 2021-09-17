<?php

namespace App\Http\Controllers;

use App\Models\Valors;
use Illuminate\Http\Request;

class ValorController extends Controller
{
    public function index(Request $request)
    {
        $valor = Valors::all();

        return view('funcionarios.valor', compact('valor'));
    }

    public function create()
    {
        return view('funcionarios.adicionarValor');
    }

    public function store( Request $request)
    {
       $valor = Valors::create($request->only('valor'));
               // $request->session()
        // ->flash(
        //     'mensagem',
        //     "Funcionario {$funcionario->id} criado com sucesso {$funcionario->nome}"
        // );

        return view('funcionarios.adicionarValor', compact('valor'));
    }

}
