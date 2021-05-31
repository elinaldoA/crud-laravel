<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiva="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Cadastrar novo Produto</title>
  </head>
  <body>
    <form action="{{ route('registrar_produto') }}" method="POST" class="form form-group">
    <div class="mb-3">
    @csrf
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome">
    </div>
    <div class="mb-3">
        <label for="custo" class="form-label">Custo</label>
        <input type="text" class="form-control" name="custo">
    </div>
    <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="text" class="form-control" name="preco">
    </div>
    <div class="mb-3">
        <label for="quantidade" class="form-label">Quantidade</label>
        <input type="text" class="form-control" name="quantidade">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
  </body>
</html>