<?php namespace App\Http\Controllers;

use App\Models\Investimento;
use Illuminate\Support\Facades\DB;

class RemovedorDeInvestimento
{
    public function removerInvestimento(int $investimentoId)
    {
        $nomeInvestimento = 'removerInvestimento';
        DB::transaction( function () use ($investimentoId, &$nomeInvestimento, &$tipoInvestimento){

            $investimento = Investimento::find($investimentoId);
            $nomeInvestimento = $investimento->nome;
            $tipoInvestimento = $investimento->tipo;



            $investimento->delete();

        });

        return redirect('/home/investimentos');

    }

}
