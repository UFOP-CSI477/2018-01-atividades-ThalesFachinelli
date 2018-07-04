<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema de Controle Acadêmico</title>
  </head>
  <body>

    <?php
      session_start();
      if ( isset($_SESSION['mensagem']) ) {
        echo "<h2>" . $_SESSION['mensagem'] . "</h2>";
        unset($_SESSION['mensagem']);
      }
    ?>

    <!-- Links //-->
    <a href="router.php?op=1">Listar alunos</a>
    <a href="router.php?op=2">Inserir cidade</a>
    <a href="router.php?op=4">Listar cidade</a>
    <a href="router.php?op=5">Listar estados</a>
    <a href="router.php?op=6">Inserir estado</a>
    <a href="router.php?op=8">Inserir aluno</a>

  </body>
</html>
