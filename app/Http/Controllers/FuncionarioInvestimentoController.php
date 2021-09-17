<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\FuncionarioInvestimento;
use App\Models\Investimento;
use Illuminate\Http\Request;
use CreateFuncionarioInvestimentoTable;
use Illuminate\Validation\Rule;

class FuncionarioInvestimentoController extends Controller
{
    public function index(Request $request, $id)
    {
        $funcionario = Funcionario::with('investimentos')->find($id);

        return view('funcionarios.visualizarfuncionario', compact('funcionario'));
    }


    public function create(Request $request, $id)
    {
        $funcionario = Funcionario::find($id);
        $investimentos = Investimento::all();

        return view('funcionarios.vincularFuncionarioInvestimento', compact('funcionario', 'investimentos'));
    }

    public function store(Request $request, $id)
    {
        $request->validate(
            [
                'investimento_id' => [
                    'required',
                    'exists:investimentos,id',
                    Rule::unique('funcionario_investimento', 'investimento_id')->where(function ($query) use ($request) {
                        return $query->where('funcionario_id', $request->funcionario_id);
                    })
                ],
                'valor' => 'required'
            ],
            [
                'valor.required' => 'O campo valor precisa ser preenchido'
            ]
        );

        Funcionario::find($request->funcionario_id)->investimentos()->attach($request->investimento_id, ['valor'=>$request->valor]);

        return redirect()->route('visualizar_funcionario_investimentos', $id);
    }

    public function edit(Request $request, $id, $investimento_id)
    {
        $funcionario = Funcionario::with('investimentos')->find($id);
        $investimento = $funcionario->investimentos()->where('investimento_id', $investimento_id)->first();

        return view('funcionarios.editarValor', compact('funcionario', 'investimento'));
    }

       public function update(Request $request, $id, $investimento_id)
       {
            $funcionario = Funcionario::findOrFail($id);
           $investimento = $funcionario->investimentos();

            $investimento->updateExistingPivot($investimento_id, ['valor'=>$request->valor,]);

           return redirect()->route('visualizar_funcionario_investimentos', $id);
       }

       public function destroy(Request $request, $id, $investimento_id)
        {
           $funcionario = Funcionario::find($id);
           $investimento = $funcionario->investimentos()->detach($investimento_id);

           return redirect()->route('visualizar_funcionario_investimentos', $id);
        }
}
