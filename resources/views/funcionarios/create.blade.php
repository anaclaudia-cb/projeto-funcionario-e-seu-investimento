@extends('funcionarios.layout.layout')

@section('cabecalho')
    Adicionar Funcionário
@endsection

@section('conteudo')
<li class="list-group-item justify-content-between align-items-center">
    <form method="post">
        @csrf
        <div class="container">
        <label for="name">Nome Completo</label>
        <input type="text" class="form-control" name="name" id="name">
        @error('name')
            {{$message}}
            @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">Endereço de email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            @error('email')
            {{$message}}
            @enderror
        </div>
        {{-- Foto de perfil <div class="form-group">
            <label for="exampleFormControlFile1">Foto de Perfil</label>
            <input name="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
            @error('foto')
            {{$message}}
            @enderror
        </div> --}}
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    </form>
</li>
@endsection

