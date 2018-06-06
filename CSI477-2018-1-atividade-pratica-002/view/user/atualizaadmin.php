<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Tela de Cadastro</title>
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

</table>
    <form method="post" action="router.php?op=10" id="formlogin" name="formlogin" >
    <fieldset id="fie">
    <legend>ATUALIZA USUÁRIO</legend><br />
    <legend>Digite os dados do usuário a ser atualizado</legend><br />
    <label>ID : </label>
    <input type="text" name="id" id="login"  /><br />
    <label>NOME : </label>
    <!-- o campo “name” dentro do input e importante, pois será ele que armazenará os dados digitados .-->
    <input type="text" name="login" id="login"  /><br />
    <label>EMAIL :</label>
    <input type="text" name="email" id="email" /><br />
    <label>SENHA :</label>
    <input type="password" name="senha" id="senha" /><br />
    <input class="btn btn-primary" type="submit" value="ATUALIZAR    "  />
    </fieldset>
    </form>
  </body>
</html>
