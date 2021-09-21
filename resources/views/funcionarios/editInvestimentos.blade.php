@extends('funcionarios.layout.layout')

@section('cabecalho')
    Editar Investimento
@endsection


@section('conteudo')

    @if (!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <body>
        <li class="list-group-item justify-content-between align-items-center">
        <form method="POST" action="{{ route('update_investimento', $investimento->id) }}">
            @csrf
        @method('PATCH')
            <div class="col-md-6 p-lg-3 mx-auto my-5 form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nome: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="nome"
                        placeholder="Insira o primeiro nome" value="{{ $investimento->nome }}">
                </div>

                <label for="colFormLabel" class="col-sm-2 col-form-label">Email: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="tipo"
                        value="{{ $investimento->tipo }}">
                </div>

                <div class="btn-group mx-auto my-5" role='group'>
                    <button type="submit" class="btn btn-success">Salvar</button>
                    {{-- <a href="{{ route('home') }}" class="btn btn-info btn" role="button">Voltar</a> --}}
                </div>
            </div>
        </form>
    </li>
    </body>
@endsection
