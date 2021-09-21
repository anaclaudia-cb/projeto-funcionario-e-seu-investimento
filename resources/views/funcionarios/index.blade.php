@extends('funcionarios.layout.layout')

@section('cabecalho')
    Lista de Funcionários
@endsection


@section('conteudo')

    @if (!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <body>
        <li class="list-group-item justify-content-between align-items-center">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($funcionarios as $funcionario)
                        <tr>
                            <td scope="row">{{ $funcionario->id }}</td>
                            <td> {{ $funcionario->name }} </td>
                            <td> {{ $funcionario->email }} </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('visualizar_funcionario_investimentos', $funcionario->id) }}" class="btn btn-success btn-sm mr-1" type="submit" data-toggle="tooltip" data-placement="bottom" title="Visualizar"
                                        class="btn btn-success btn-sm mr-1 d-inline-flex"><i class="fas fa-eye"></i></a>
                                    {{-- {{route('funcionarios.show', $funcionario->id)}} --}}
                                    <a href="{{ route('alterar_funcionario', $funcionario->id) }}"
                                        class="btn btn-info btn-sm mr-1" type="submit" data-toggle="tooltip" data-placement="bottom" title="Editar"
                                        class="btn btn-info btn-sm mr-1 d-inline-flex"><i class="fas fa-edit"></i></a>
                                    <form method="post" action="{{ route('removerFuncionario', $funcionario->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip" data-placement="bottom" title="Excluir"><i
                                                class="fas fa-trash-alt"></i></button>

                                        <a href="{{ route('createFuncionarioInvestimento', $funcionario->id) }}" class="btn btn-warning btn-sm mr-1" type="submit" data-toggle="tooltip" data-placement="bottom"
                                        title="Vincular e adicionar investimento"><i class="fas fa-user-lock"></i></a>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </li>
        </div>
    </body>
@endsection
