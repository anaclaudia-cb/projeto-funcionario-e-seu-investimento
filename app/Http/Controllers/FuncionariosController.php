<?php

namespace App\Http\Controllers;

use App\FuncionariosFormRequest;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function index(Request $request)
    {
        $funcionarios = Funcionario::all();

        $mensagem = $request->session()->get('mensagem');

        return view('funcionarios.index', compact('funcionarios', 'mensagem'));
    }

    public function create()
    {
        return view('funcionarios.create');
    }

    public function store(FuncionariosFormRequest $request, CriarFuncionario $criadorDeFuncionario)
    {
        $funcionario = $criadorDeFuncionario->criarFuncionario(
            $request->name,
            $request->email,
        );

        $request->session()
        ->flash(
            'mensagem',
            "Funcionario {$funcionario->id} criado com sucesso {$funcionario->nome}"
        );

        return redirect()->route('listar_funcionarios');
    }

    public function destroy(Request $request, $id)
    {
        $funcionario = Funcionario::find($id);
        $funcionario->investimentos()->sync([]);
        $funcionario->delete();
        // $nomeFuncionario = $removedorDeFuncionario->removerFuncionario($request->id);

        // $request->session()
        //     ->flash(
        //        'mensagem',
        //         "Funcionário $nomeFuncionario removido com sucesso"
        //  );
        return redirect()->route('listar_funcionarios');
    }

    public function edit(int $id, Request $request)
    {
        $funcionario = Funcionario::find($id);
        return view('funcionarios.edit', compact('funcionario'));
        // $funcionario = Funcionario::find($id);
        // $novoNome = $request->name;
        // $funcionario->name = $novoNome;
        // $novoEmail = $request->email;
        // $funcionario->email = $novoEmail;
        // $funcionario->save();
    }
    public function update(Request $request, Funcionario $id)
    {
        // $funcionario=Funcionario::find(id)
        // $funcionario->update
        $id->update([
        'name'=> $request->name,
        'email'=> $request->email,
        ]);
        return redirect('/home');
    }

    //  public function show ($id)
    // {
    //     $funcionario = Funcionario::with('investimentos')->find($id);
    //     // $investimento = Investimentos::all();

    //     return view('funcionarios.visualizarfuncionario', compact('funcionario'));

    // }

//         public function manyToMany (int $id)
//         {
//           $funcionario = Funcionario::find($id)->get()->first();
//           echo $funcionario->id;
//         }

}
