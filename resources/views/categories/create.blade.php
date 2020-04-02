@extends('layouts.app')
@section('content')
<h2>Criar Categorias</h2>

<form action="{{ route('categories.store')}}" method="POST" class="bg-white p-3">
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
        <input type="text" class="form-control mb-2" name="name" placeholder="Digite o nome da categoria">
        <button type="submit" class="btn btn-success">Criar</button>
    </div>
</form>

@endsection
