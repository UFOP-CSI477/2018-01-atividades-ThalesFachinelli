<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/cadastroprocedicemento.js"></script>
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
    </ul>
  </div>
</nav>
    <form method="post" action="router.php?op=14" id="formlogin" name="formlogin" >
    <fieldset id="fie">
    <legend>NOVO PROCEDIMENTO</legend><br />
    <div class="form-group" id="login">
      <label>NOME : </label>
      <!-- o campo “name” dentro do input e importante, pois será ele que armazenará os dados digitados .-->
      <input type="text" name="login" id="login"  /><br />
      <div class="alert alert-danger" style="display: none" id="alertaLogin">
                    Campo obrigatório.
      </div>
    </div>
    <div class="form-group" id="id">
      <label>VALOR :</label>
      <input type="text" name="valor" id="valor" /><br />
      <div class="alert alert-danger" style="display: none" id="alertaValor">
                    Campo obrigatório.
      </div>
    </div>
    <input class="btn btn-primary" type="submit" value="CADASTRAR    "  />
    </fieldset>
    </form>
  </body>
</html>
