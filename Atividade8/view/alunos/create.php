<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inserir cidades</title>
  </head>
  <body>

    <form method="post" action="router.php?op=9">

      <label for="nome">Nome:</label>
      <input type="text" name="nome" required>

      <label for="rua">Rua:</label>
      <input type="text" name="rua">

      <label for="numero">Numero:</label>
      <input type="text" name="numero">

      <label for="bairro">Bairro:</label>
      <input type="text" name="bairro">

      <label for="cep">CEP:</label>
      <input type="text" name="cep">

      <label for="mail">Mail:</label>
      <input type="text" name="mail">

      <label for="cidade_id">Cidade:</label>
      <select name="cidade_id">
        <option value="">Selecione:</option>
        <!-- Estados //-->
        <?php foreach( $lista as $c ): ?>
          <option value="<?= $c['id'] ?>"><?= $c['nome'] ?></option>
        <?php endforeach ?>
      </select>

      <input type="submit" value="Cadastrar">
      <input type="reset" value="Limpar">

    </form>






  </body>
</html>
