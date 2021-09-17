@extends('funcionarios.layout.layout')

@section('cabecalho')
    Valor
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
                        <th scope="col">Valor</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($valors as $valor)
                            {{-- <td scope="row">{{ $valor->id }}</td> --}}
                            <td> {{ $valor->valor }} </td>
                            {{-- <td>valor</td> --}}
                            <td>
                                {{-- <div class="d-flex">
                                    {{-- {{route('funcionarios.show', $funcionario->id)}} --}}
                                     {{-- <a href="{{ route('alterar_funcionario', $funcionario->id) }}"
                                        class="btn btn-info btn-sm mr-1" type="submit"
                                        class="btn btn-info btn-sm mr-1 d-inline-flex"><i class="fas fa-edit"></i></a> --}}
                                     {{-- <form method="post" action="/home/remover/{{ $valor }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mr-1"><i
                                                class="fas fa-trash-alt"></i></button>
                                </div> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </li>
        </div>
    </body>
@endsection
