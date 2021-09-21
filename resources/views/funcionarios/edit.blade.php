@extends('funcionarios.layout.layout')

@section('cabecalho')
    Editar Funcionario
@endsection


@section('conteudo')

    @if (!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <body>
        <li class="list-group-item justify-content-between align-items-center">
        <form method="POST" action="{{ route('update_funcionario', $funcionario->id) }}">
            @csrf
        @method('PATCH')
            <div class="col-md-6 p-lg-3 mx-auto my-5 form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nome: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="name"
                        placeholder="Insira o primeiro nome" value="{{ $funcionario->name }}">
                </div>

                <label for="colFormLabel" class="col-sm-2 col-form-label">Email: </label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="colFormLabel" name="email" placeholder="Insira o e-mail"
                        value="{{ $funcionario->email }}">
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
