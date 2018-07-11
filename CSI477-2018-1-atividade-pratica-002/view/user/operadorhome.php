<!DOCTYPE html>
<?
 //session_start();
 ?>
<html lang="en" dir="ltr">
  <head
    <meta charset="utf-8">
    <link rel="stylesheet" href="/atividade2MVC/css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Admin Home</title>
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
    echo "Id: "; echo($_SESSION['id']);
    ?>

  </body>
</html>
