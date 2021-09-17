@extends('funcionarios.layout.layout')

@section('cabecalho')
    Atualizar Investimento
@endsection


@section('conteudo')

<li class="list-group-item justify-content-between align-items-center">
    <h1 class="lead fw-normal" style="text-align:center">{{ $funcionario->name }}
                    <br>Vincule o funcionário e adicione o valor do investimento</h1>

    <div class="product-device shadow-sn d-none d-mb-block>"></div>
    <div class="product-device product-device-2 shadow-sn d-none d-nd-block"></div>

    <form method="POST" action="{{ route('storeFuncionarioInvestimento', $funcionario->id) }}">
        @csrf
        <div class="form-body row form-holder form-content form-items col-md-12 ">
            <input type="hidden" class="form-control" id="colFormLabel" name="funcionario_id"
                value="{{ $funcionario->id }}">
        </div>
        <div>
            <label for="colFormLabel" name="funcionario_name"><b>Funcionario:</b> {{ $funcionario->name }}</label>
        </div>
        <label for="colFormLabel" class="col-sm-3 col-form-label"><b>Selecione o investimento:</b></label>
            <select name="investimento_id">
                @foreach ($investimentos as $investimento)
                    <option value="{{ $investimento->id }}">{{ $investimento->nome }}</option>
                @endforeach
            </select>


        <div class="form-body row form-holder form-content form-items col-md-12">
            <label for="colFormLabel" class="col-sm-3 col-form-label"><b>Valor: </b></label>
            <div class="col-sn-4">
                <input type="text" class="form-control ml-1" id="colFormLabel" name="valor"
                    placeholder="Insira o valor do investimento">
            </div>
        </div>

        <div class="btn-group mx-auto my-7" role='group'>
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
        @if ($errors->any())
            <ul>
                @foreach ($errors as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </ul>

        @endif
    </form>
@endsection
