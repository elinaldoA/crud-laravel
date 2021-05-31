<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiva="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Excluir Produto</title>
  </head>
  <body>
    <form action="{{ route('excluir_produto', ['id' => $produto->id]) }}" method="POST" class="form form-group">
    <div class="mb-3">
    @csrf
        <label for="msg">Tem certeza que deseja excluir esse produto ?</label><br/>
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" value="{{ $produto->nome }}">
    </div>
    <button type="submit" class="btn btn-danger">Sim, excluir</button>
    </form>
  </body>
</html>