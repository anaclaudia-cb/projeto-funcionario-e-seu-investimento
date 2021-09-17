@extends('funcionarios.layout.layout')

@section('cabecalho')
    Visualizar Funcionário
@endsection


@section('conteudo')

    @if (!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <body>
        <li class="list-group-item justify-content-between align-items-center">
            <h1 class="lead fw-normal" style="text-align:center">{{ $funcionario->name }}</h1>
            {{-- @dd($funcionario) --}}
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome Investimento</th>
                        <th scope="col">Tipo Investimento</th>
                        <th scope="col">Valor</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($funcionario->investimentos as $investimento)
                        <tr>
                            <td scope="row">{{ $investimento->id }}</td>
                            <td> {{ $investimento->nome }} </td>
                            <td> {{ $investimento->tipo }} </td>
                            <td> {{ $investimento->pivot->valor }} </td>
                            <td>
                                <div class="d-flex">

                                    <a href="{{route('alterar_valor',[$funcionario->id,$investimento->id])}}"
                                        class="btn btn-info btn-sm mr-1" type="submit"
                                        class="btn btn-info btn-sm mr-1 d-inline-flex" data-toggle="tooltip"
                                        data-placement="bottom" title="Editar Valor"><i class="fas fa-edit"></i></a>


                                    {{-- botao de excluir investimento do funcionario --}}

                                    <form method="post" action="{{route('remover_funcionario_investimento',[$funcionario->id,$investimento->id])}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mr-1"><i class="fas fa-trash-alt"
                                                ata-toggle="tooltip" data-placement="bottom"
                                                title="Excluir investimento"></i></button>
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
