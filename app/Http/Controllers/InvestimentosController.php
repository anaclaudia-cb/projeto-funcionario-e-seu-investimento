<?php

namespace App\Http\Controllers;

use App\Models\Investimento;
use Illuminate\Http\Request;

class InvestimentosController extends Controller
{
    public function index(Request $request)
    {
        $investimentos = Investimento::all();

        return view('funcionarios.investimentos', compact('investimentos'));
    }

    public function create()
    {
        return view('funcionarios.criarInvestimento');
    }

    public function store( Request $request)
    {
       $investimento = Investimento::create($request->only('nome', 'tipo'));
               // $request->session()
        // ->flash(
        //     'mensagem',
        //     "Funcionario {$funcionario->id} criado com sucesso {$funcionario->nome}"
        // );

        return redirect()->route('listar_investimentos');
    }

    public function destroy(Request $request, $id)
    {
        $investimento = Investimento::find($id);
        $investimento->funcionarios()->sync([]);
        $investimento->delete();
        // $nomeInvestimento = $removedorDeInvestimento->removerInvestimento($request->id);

        // $request->session()
        //     ->flash(
        //         'mensagem',
        //         "Funcionário $nomeInvestimento removido com sucesso"
        //     );
        return redirect()->route('listar_investimentos');
    }

    public function edit(int $id, Request $request)
    {
        $investimento = Investimento::find($id);
        return view('funcionarios.editInvestimentos', compact('investimento'));
    }
    public function update(Request $request, Investimento $id)
    {
        // $funcionario=ModelsFuncionarios::find(id)
        // $funcionario->update
        $id->update([
        'nome'=> $request->nome,
        'tipo'=> $request->tipo,
        ]);
        return redirect('/investimentos');
    }

}
