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
      <li class="active"><a href="/atividade2MVC/router.php?op=34">Home</a></li>
      <li><a href="/atividade2MVC/router.php?op=27">Solicitar Exame</a></li>
      <li><a href="/atividade2MVC/router.php?op=28">Verificar Exames Solicitados</a></li>
    </ul>
  </div>
</nav>
<?php
    echo "Usuário logado:";echo($_SESSION['login']);
    ?>
    <form method="post" action="router.php?op=14" id="formlogin" name="formlogin" >
    <fieldset id="fie">
    <legend>NOVO PROCEDIMENTO</legend><br />
    <select name="idp">
        <option value="">Selecione:</option>
        <!-- Estados //-->
        <?php foreach( $lista as $p ): ?>
          <option value="<?= $p['id'] ?>"><?= $p['name'] ?></option>
        <?php endforeach ?>
      </select>
    <input class="btn btn-primary" type="submit" value="CADASTRAR    "  />
    </fieldset>
    </form>

  </body>
</html>
