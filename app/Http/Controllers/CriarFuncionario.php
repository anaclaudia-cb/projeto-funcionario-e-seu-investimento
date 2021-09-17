<?php namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Support\Facades\DB;

class criarFuncionario
{

    public function criarFuncionario(
        string $name,
        string $email

    ) : Funcionario
    {
        $funcionario = null;
        DB::beginTransaction();
        $funcionario = Funcionario::create(['name' => $name, 'email' => $email]);
        DB::commit();


        return $funcionario;

    }
}
