<?php namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Support\Facades\DB;

class RemovedorDeFuncionario
{
    public function removerFuncionario(int $funcionarioId)
    {
        $nomeFuncionario = 'removerFuncionario';
        DB::transaction( function () use ($funcionarioId, &$nomeFuncionario, &$emailFuncionario){

            $funcionario = Funcionario::find($funcionarioId);
            $nomeFuncionario = $funcionario->nome;
            $emailFuncionario = $funcionario->email;



            $funcionario->delete();

        });

        return redirect('/home');

    }

}
