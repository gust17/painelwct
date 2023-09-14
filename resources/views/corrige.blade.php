<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">

    <!-- Inclua o JavaScript do Bootstrap via CDN (opcional, mas necessário para funcionalidades interativas) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<title>Corrige Saque</title>
</head>
<body>
<table class="table table-striped">
    <thead>
    <tr>
        <th>id</th>
        <th>User</th>
        <th>Entrada</th>
        <th>Saida</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @forelse($usuarios as $usuario)
        <tr>

         <td>{{$usuario->id}}</td>
         <td>{{$usuario->login}}</td>
         <td>{{$usuario->extratos->where('tipo_saldo',1)->sum('valor')}}</td>
         <td>{{$usuario->extratos->where('tipo_saldo',2)->sum('valor')}}</td>
         <td>{{$usuario->name}}</td>
        </tr>

    @empty
    @endforelse


    </tbody>
</table>
</body>
</html>
