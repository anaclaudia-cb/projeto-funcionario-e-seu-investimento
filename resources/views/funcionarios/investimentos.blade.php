@extends('funcionarios.layout.layout')

@section('cabecalho')
    Investimentos
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
                            <th scope="col">Nome do Investimento</th>
                            <th scope="col">Tipo</th>
                            {{-- <th scope="col">Valor</th> --}}
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($investimentos as $investimento)
                            <tr>
                                <td scope="row">{{ $investimento->id }}</td>
                                <td> {{ $investimento->nome }} </td>
                                <td> {{ $investimento->tipo }} </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('alterar_investimento', $investimento->id) }}"
                                            class="btn btn-info btn-sm mr-1" type="submit"
                                            class="btn btn-info btn-sm mr-1 d-inline-flex" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-edit"></i></a>
                                        <form method="post" action="{{ route('remover_investimentos', $investimento->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm mr-1"><i
                                                    class="fas fa-trash-alt" ata-toggle="tooltip" data-placement="bottom" title="Excluir"></i></button>
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
