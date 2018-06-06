<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/atividade2MVC/css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Lista de Procedimentos</title>
  </head>
  <body>

<h2>Lista de Procedimentos</h2>

    <table class="table-bordered">

      <tr>
        <th>Nome</th>
        <th>Preço</th>
      </tr>

      <?php foreach( $lista as $linha ): ?>
      <tr>
        <td><?= $linha['name'] ?></td>
        <td><?= $linha['price'] ?></td>
      </tr>
    <?php endforeach ?>

  </table><br>
