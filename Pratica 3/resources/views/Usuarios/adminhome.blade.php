<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head
    <meta charset="utf-8">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Admin Home</title>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Analysis</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ route('adminhome') }}">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Procedimentos
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('adminlistar') }}">Listar</a></li>
          <li><a href="{{ route('admincadastrar') }}">Cadastrar</a></li>
          <li><a href="{{ route('adminatualizar') }}">Atualizar</a></li>
          <li><a href="{{ route('admindeletar') }}">Excluir</a></li>
        </ul>
      </li>
      <li><a href="">Logout</a></li>
    </ul>
  </div>
</nav>
@yield('content')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
