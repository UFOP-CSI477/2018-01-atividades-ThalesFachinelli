<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/tratamentocadastro.js"></script>
    <title>Tela de Cadastro</title>
  </head>
  <body>
    <form method="post" action="router.php?op=2" id="formlogin" name="formlogin" >
    <fieldset id="fie">
    <legend>NOVO USUÁRIO</legend><br />
    <div class="form-group" id="login">
      <label>NOME : </label>
      <!-- o campo “name” dentro do input e importante, pois será ele que armazenará os dados digitados .-->
      <input type="text" name="login" id="login"  /><br />
      <div class="alert alert-danger" style="display: none" id="alertaLogin">
                    Nome é campo obrigatório.
      </div>
    </div>
    <div class="form-group" id="email">
      <label>EMAIL :</label>
      <input type="text" name="email" id="email" /><br />
      <div class="alert alert-danger" style="display: none" id="alertaEmail">
                    Email é campo obrigatório.
      </div>
      <div class="alert alert-danger" style="display: none" id="alertaEmail2">
                    Email em formato inválido, por favor tente novamente.
      </div>
    </div>
    <div class="form-group" id="senha">
      <label>SENHA :</label>
      <input type="password" name="senha" id="senha" /><br />
      <div class="alert alert-danger" style="display: none" id="alertaSenha">
                    Senha é campo obrigatório.
      </div>
    </div>
    <input class="btn btn-primary" type="submit" value="CADASTRAR    "  />
    </fieldset>
    </form>
  </body>
</html>
