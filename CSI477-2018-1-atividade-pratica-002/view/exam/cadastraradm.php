<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Cadastro de Procedimento</title>
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
    <form method="post" action="router.php?op=20" id="formlogin" name="formlogin" >
    <fieldset id="fie">
    <legend>NOVO EXAME</legend><br />
    <label>ID_REQUERENTE :</label>
    <input type="text" name="id" id="id" /><br />
    <label>ID_PROCEDIMENTO :</label>
    <input type="text" name="idp" id="idp" /><br />
    <label>DATA :</label>
    <input type="date" name="data"><br>
    <input class="btn btn-primary" type="submit" value="CADASTRAR    "  />
    </fieldset>
    </form>
  </body>
</html>
