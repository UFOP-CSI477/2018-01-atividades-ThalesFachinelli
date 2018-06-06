<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/atualizaprocedimento.js"></script>
    <title>Atualização de Procedimento</title>
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
<h2>Lista de Procedimentos Cadastrados</h2>

    <table class="table-bordered">

      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Requisitado por</th>
        <th>Cadastrado em</th>
        <th>Atualizado em</th>
      </tr>

      <?php foreach( $lista as $linha ): ?>
      <tr>
        <td><?= $linha['id'] ?></td>
        <td><?= $linha['name'] ?></td>
        <td><?= $linha['price'] ?></td>
        <td><?= $linha['user_id'] ?></td>
        <td><?= $linha['created_at'] ?></td>
        <td><?= $linha['updated_at'] ?></td>
      </tr>
    <?php endforeach ?>

  </table>
    <form method="post" action="router.php?op=16" id="formlogin" name="formlogin" >
    <fieldset id="fie">
    <legend>ATUALIZA PROCEDIMENTO</legend><br />
    <legend>Digite os dados do procedimento a serem atualizados</legend><br />
    <div class="form-group" id="id">
      <label>ID do procedimento : </label>
      <input type="text" name="id" id="id"  /><br />
      <div class="alert alert-danger" style="display: none" id="alertaID">
                    Campo obrigatório.
      </div>
    </div>
    <div class="form-group" id="nome">
      <label>NOME : </label>
      <input type="text" name="nome" id="nome"  /><br />
      <div class="alert alert-danger" style="display: none" id="alertaNome">
                    Campo obrigatório.
      </div>
    </div>
    <div class="form-group" id="valor">
      <label>VALOR :</label>
      <input type="text" name="valor" id="valor" /><br />
      <div class="alert alert-danger" style="display: none" id="alertaValor">
                    Campo obrigatório.
      </div>
    </div><br>
    <input class="btn btn-primary" type="submit" value="ATUALIZAR    "  />
    </fieldset>
    </form>
  </body>
</html>
