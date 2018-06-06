<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/atividade2MVC/css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Lista de Exames</title>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Analysis</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/atividade2MVC/router.php?op=39">Home</a></li>
      <li><a href="/atividade2MVC/router.php?op=38">Listar Exames</a></li>
      <li><a href="/atividade2MVC/router.php?op=36">Alterar Procedimentos</a></li>
      <li><a href="/atividade2MVC/router.php?op=26">Logout</a></li>
    </ul>
  </div>
</nav>
<?php
    echo "Usuário logado:";echo($_SESSION['login']);
    ?>
<h2>Lista de Exames Cadastrados</h2>

    <table class="table-bordered">

      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Requisitado por</th>
        <th>Procedimento Associado</th>
        <th>Data</th>
        <th>Criado em</th>
        <th>Atualizado em</th>
        <th>Preço</th>
      </tr>

      <?php foreach( $lista as $linha ): ?>
      <tr>
        <td><?= $linha['id'] ?></td>
        <td><?= $linha['name'] ?></td>
        <td><?= $linha['user_id'] ?></td>
        <td><?= $linha['procedure_id'] ?></td>
        <td><?= $linha['date'] ?></td>
        <td><?= $linha['created_at'] ?></td>
        <td><?= $linha['updated_at'] ?></td>
        <td><?= $linha['price'] ?></td>
    <?php endforeach ?>
    </tr>
  </table><br>
