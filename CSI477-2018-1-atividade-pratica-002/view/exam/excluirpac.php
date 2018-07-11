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
      <li><a href="/atividade2MVC/router.php?op=28">Solicitar Exame</a></li>
      <li><a href="/atividade2MVC/router.php?op=30">Verificar Exames Solicitados</a></li>
      <li><a href="/atividade2MVC/router.php?op=31">Excluir Exames Solicitados</a></li>
      <li><a href="/atividade2MVC/router.php?op=33">Atualizar Exames Solicitados</a></li>
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
            <th>Total</th>
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
    <form method="post" action="router.php?op=32" id="formlogin" name="formlogin" >
    <fieldset id="fie">
    <legend>EXCLUIR EXAME</legend><br />
    <select name="id">
        <option value="">SELECIONE O ID DO EXAME A SER EXCLUÍDO:</option>
        <?php foreach( $lista2 as $p ): ?>
          <option value="<?= $p['id'] ?>"><?= $p['id'] ?></option>
        <?php endforeach ?>
      </select><br><br>
    <input class="btn btn-primary" type="submit" value="EXCLUIR    "  />
    </fieldset>
    </form>

  </body>
</html>
