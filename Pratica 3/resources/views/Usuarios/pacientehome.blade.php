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
      <li class="active"><a href="{{ route('pacientehome') }}">Home</a></li>
      <li><a href="{{ route('pacientecadastrar') }}">Solicitar Exame</a></li>
      <li><a href="/atividade2MVC/router.php?op=30">Verificar Exames Solicitados</a></li>
      <li><a href="/atividade2MVC/router.php?op=31">Excluir Exames Solicitados</a></li>
      <li><a href="/atividade2MVC/router.php?op=33">Atualizar Exames Solicitados</a></li>
      <li><a href="/atividade2MVC/router.php?op=26">Logout</a></li>
    </ul>
  </div>
</nav>
@yield('content')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
