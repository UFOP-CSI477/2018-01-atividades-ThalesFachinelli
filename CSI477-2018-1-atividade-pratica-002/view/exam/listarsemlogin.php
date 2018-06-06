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
<h2>Lista de Exames Cadastrados</h2>

    <table class="table-bordered">

      <tr>
        <th>ID</th>
        <th>Requisitado por</th>
        <th>Procedimento Associado</th>
        <th>Data</th>
        <th>Criado em</th>
        <th>Atualizado em</th>
      </tr>

      <?php foreach( $lista as $linha ): ?>
      <tr>
        <td><?= $linha['id'] ?></td>
        <td><?= $linha['user_id'] ?></td>
        <td><?= $linha['procedure_id'] ?></td>
        <td><?= $linha['date'] ?></td>
        <td><?= $linha['created_at'] ?></td>
        <td><?= $linha['updated_at'] ?></td>
      </tr>
    <?php endforeach ?>

  </table><br>
