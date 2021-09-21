<?php

use App\Models\Funcionario;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'App\Http\Controllers\FuncionariosController@index')->name('listar_funcionarios');
Route::get('/{id}/visualizar', 'App\Http\Controllers\FuncionariosController@show')->name('funcionarios.show');
Route::get('/create', 'App\Http\Controllers\FuncionariosController@create');
Route::post('/create', 'App\Http\Controllers\FuncionariosController@store');
Route::delete('/remover/{id}', 'App\Http\Controllers\FuncionariosController@destroy')->name('removerFuncionario');
Route::get('/{id}/editar', 'App\Http\Controllers\FuncionariosController@edit')->name('alterar_funcionario');
Route::patch('/{id}/editar', 'App\Http\Controllers\FuncionariosController@update')->name('update_funcionario');

Route::get('/investimentos', 'App\Http\Controllers\InvestimentosController@index')->name('listar_investimentos');
Route::get('/investimentos/criar', 'App\Http\Controllers\InvestimentosController@create');
Route::post('/investimentos/criar', 'App\Http\Controllers\InvestimentosController@store');
Route::delete('/investimentos/{id}/remover', 'App\Http\Controllers\InvestimentosController@destroy')->name('remover_investimentos');
Route::get('/investimento/{id}/editar', 'App\Http\Controllers\InvestimentosController@edit')->name('alterar_investimento');
Route::patch('/investimentos/{id}/', 'App\Http\Controllers\InvestimentosController@update')->name('update_investimento');

Route::get('/{id}/adicionar/valor', 'App\Http\Controllers\ValorController@index')->name('valorindex');
Route::get('/investimentos/{id}/adicionar/valor', 'App\Http\Controllers\ValorController@create');
Route::post('/investimentos/{id}/adicionar/valor', 'App\Http\Controllers\ValorController@store');

Route::get('/{id}/visualizar', 'App\Http\Controllers\FuncionarioInvestimentoController@index')->name('visualizar_funcionario_investimentos');
Route::get('/{id}/vincular', 'App\Http\Controllers\FuncionarioInvestimentoController@create')->name('createFuncionarioInvestimento');
Route::post('/{id}/vincular', 'App\Http\Controllers\FuncionarioInvestimentoController@store')->name('storeFuncionarioInvestimento');
Route::delete('/funcionario/{id}/investimento/{investimento_id}', 'App\Http\Controllers\FuncionarioInvestimentoController@destroy')->name('remover_funcionario_investimento');
Route::get('/funcionario/{id}/investimento/{investimento_id}/editar', 'App\Http\Controllers\FuncionarioInvestimentoController@edit')->name('alterar_valor');
Route::patch('/funcionario/{id}/investimento/{investimento_id}/', 'App\Http\Controllers\FuncionarioInvestimentoController@update')->name('update_valor');

/** API */

Route::get('/api', function () {
    $response = Http::get('https://reqres.in/api/users?page=1');

    // dd($response->json()["data"]);
    $data = $response->json()["data"];
    foreach ($data as $user) {

        Funcionario::updateOrcreate([
            "name" => $user['first_name'] . " " . $user['last_name'],
            "email" => $user['email'],
        ]);
    }
});



/**
 * Has Many To Many
 */

 //$this->get('many-to-many', 'ManyToManyController@manyToMany');
