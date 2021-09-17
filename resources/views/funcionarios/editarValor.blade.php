@extends('funcionarios.layout.layout')

@section('cabecalho')
    Editar Valor
@endsection


@section('conteudo')

@if (!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif

<body>
<form method="POST" action="{{ route('update_valor', [$funcionario->id, $investimento->id]) }}">
    @csrf
@method('PATCH')
    <div class="col-md-6 p-lg-3 mx-auto my-5 form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Valor: </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="colFormLabel" name="valor"
                placeholder="Insira o primeiro nome" value="{{ $investimento->pivot->valor }}">
        </div>
        <div class="btn-group mx-auto my-5" role='group'>
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </div>
</form>
</body>
@endsection
