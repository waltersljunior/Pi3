@extends('layouts.app')
@section('content')
<h2>Criar Prudotos</h2>

<form action="{{ route('produtos.store')}}" method="POST" class="bg-white p-3">
    @if($errors->any())
        <ul class="list-group">
            @foreach($errors->all() as $error)
            <li class="list-group-item text-danger">{{$error}}</li>
            @endforeach
        </ul>
    @endif
    @csrf
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control mb-2" name="name" placeholder="Digite o nome do produto">

        <label for="image">Imagem:</label>
        <input type="text" class="form-control mb-2" name="image" placeholder="Imagem">

        <label for="desc">Descrição:</label>
        <input type="text" class="form-control mb-2" name="desc" placeholder="Coloque a descrição">

        <label for="price">Preço:</label>
        <input type="text" class="form-control mb-2" name="price" placeholder="Digite o preço">

        <label for="discount">Desconto:</label>
        <input type="text" class="form-control mb-2" name="discount" placeholder="Qual o desconto">

        <label for="stock">Estoque:</label>
        <input type="tel" class="form-control mb-2" name="stock" placeholder="Quantos em estoque">

        <button type="submit" class="btn btn-success">Criar</button>
    </div>

</form>

@endsection
