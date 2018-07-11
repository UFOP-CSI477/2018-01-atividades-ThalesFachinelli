<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/atividade2MVC/css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Lista de alunos(as)</title>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Analysis</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/atividade2MVC/router.php?op=5">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuários
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/atividade2MVC/router.php?op=4">Listar</a></li>
          <li><a href="/atividade2MVC/router.php?op=3">Cadastrar</a></li>
          <li><a href="/atividade2MVC/router.php?op=9">Atualizar</a></li>
          <li><a href="/atividade2MVC/router.php?op=6">Excluir</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Procedimentos
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/atividade2MVC/router.php?op=11">Listar</a></li>
          <li><a href="/atividade2MVC/router.php?op=13">Cadastrar</a></li>
          <li><a href="/atividade2MVC/router.php?op=17">Atualizar</a></li>
          <li><a href="/atividade2MVC/router.php?op=12">Excluir</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Exames
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/atividade2MVC/router.php?op=18">Listar</a></li>
          <li><a href="/atividade2MVC/router.php?op=19">Cadastrar</a></li>
          <li><a href="/atividade2MVC/router.php?op=21">Atualizar</a></li>
          <li><a href="/atividade2MVC/router.php?op=24">Excluir</a></li>
        </ul>
      </li>
      <li><a href="/atividade2MVC/router.php?op=26">Logout</a></li>
    </ul>
  </div>
</nav>
<?php
    echo "Usuário logado:";echo($_SESSION['login']);
    ?>
<h2>Lista de Usuários Cadastrados</h2>

    <table class="table-bordered">

      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Senha</th>
        <th>Tipo</th>
        <th>Token</th>
        <th>Cadastrado em</th>
        <th>Atualizado em</th>
      </tr>

      <?php foreach( $lista as $linha ): ?>
      <tr>
        <td><?= $linha['id'] ?></td>
        <td><?= $linha['name'] ?></td>
        <td><?= $linha['email'] ?></td>
        <td><?= $linha['password'] ?></td>
        <td><?= $linha['type'] ?></td>
        <td><?= $linha['remember_token'] ?></td>
        <td><?= $linha['created_at'] ?></td>
        <td><?= $linha['updated_at'] ?></td>
      </tr>
    <?php endforeach ?>

  </table><br>
