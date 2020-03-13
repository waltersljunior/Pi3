<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <div class="container">

        <h1 class="text-center my-5">Novo</h1>
    <form action="newstore-todo" method="POST">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Nome</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" cols="5" rows="3" name="desc"></textarea>
        </div>
        <button class="btn btn-primary btn-sm float-right ml-1">Criar</button>
        </form>
        <a href="/todos">Voltar</a>
    </div>
</body>
</html>
