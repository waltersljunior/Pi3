@extends('layouts.app')
@section('content')
<h2>Lista de Produtos</h2>
<div class="d-flex justify-content-end">
    <a href="{{ route('produtos.create')}}" class="btn btn-success mb-2">Novo Produto</a>
</div>
<table class="table table-responsive">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Imagen</th>
        <th scope="col">Descrição</th>
        <th scope="col">Preço</th>
        <th scope="col">Desconto</th>
        <th scope="col">Estoque</th>
        <th scope="col">#</th>
    </thead>
    @foreach ($produtos as $produto)
        <tbody>
            <tr>
                <td>{{$produto->name}}</td>
                <td>{{$produto->image}}</td>
                <td>{{$produto->desc}}</td>
                <td>{{$produto->price}}</td>
                <td>{{$produto->discount}}</td>
                <td>{{$produto->stock}}</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm float-right ml-1">Visualizar</a>
                    <a href="#" class="btn btn-warning btn-sm float-right ml-1">Editar</a>
                    <a href="#" class="btn btn-danger btn-sm float-right ml-1">Apargar</a>

                </td>
            </tr>
        </tbody>
    @endforeach

@endsection
