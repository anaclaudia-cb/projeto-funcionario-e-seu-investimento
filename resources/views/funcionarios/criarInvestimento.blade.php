@extends('funcionarios.layout.layout')

@section('cabecalho')
    Adicionar Investimento
@endsection

@section('conteudo')
<li class="list-group-item justify-content-between align-items-center">
    <form method="post">
        @csrf
        <label for="nome">Nome do Investimento</label>
        <input type="text" class="form-control" name="nome" id="nome">
        @error('nomeInvestimento')
            {{$message}}
            @enderror
        <div class="form-group">
            <label for="tipo">Tipo do Investimento</label>
            <input type="text" class="form-control" id="tipo" name="tipo" aria-describedby="emailHelp">
            @error('tipo')
            {{$message}}
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary mt-1">Enviar</button>
            @error('valor')
            {{$message}}
            @enderror
        </div>
        {{-- <div class="form-group">
            <label for="exampleFormControlFile1">Foto de Perfil</label>
            <input name="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
            @error('foto')
            {{$message}}
            @enderror --}}
        </div>
    </form>
</li>
@endsection

