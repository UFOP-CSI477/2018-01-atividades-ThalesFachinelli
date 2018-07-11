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
      <li class="active"><a href="/atividade2MVC/router.php?op=39">Home</a></li>
      <li><a href="#">Listar Exames</a></li>
      <li><a href="#">Alterar Procedimentos</a></li>
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
    <form method="post" action="router.php?op=37" id="formlogin" name="formlogin" >
    <fieldset id="fie">
    <legend>ATUALIZA PROCEDIMENTO</legend><br />
    <select name="id" id="id">
        <option value="">SELECIONE O ID DO EXAME A SER ATUALIZADO:</option>
        <?php foreach( $lista2 as $p ): ?>
          <option value="<?= $p['id'] ?>"><?= $p['id'] ?></option>
        <?php endforeach ?>
      </select><br><br>
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
