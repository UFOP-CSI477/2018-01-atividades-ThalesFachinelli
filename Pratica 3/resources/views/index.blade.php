<!-- na primeira linha usaremos o “action=validalogin.php” para que o formulário repasse as informações para a pagina validalogin.php -->
<head>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<form method="post" action="router.php?op=0" id="formlogin" name="formlogin" >
<fieldset id="fie">
<legend>LOGIN</legend><br />
<label>NOME : </label>
<!-- o campo “name” dentro do input e importante, pois será ele que armazenará os dados digitados .-->
<input type="text" name="login" id="login"  /><br />
<label>SENHA :</label>
<input type="password" name="senha" id="senha" /><br />
<input class="btn btn-success" type="submit" value="LOGAR    "  />
</fieldset>
</form><br>
Não é cadastrado?<br>
<a href="{{ route('cadastrarusuario') }}">Cadastre-se</a><br><br>
<p>Deseja verificar todos os procedimentos realizados por nossa empresa? <a href="{{ route('listarprocedimentosindex') }}">Clique aqui</a></p>
