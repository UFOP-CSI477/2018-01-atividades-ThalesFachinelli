@extends('procedimentos.adminlistar')

@section('content')
    <form method="post" action="router.php?op=14" id="formlogin" name="formlogin" >
    <fieldset id="fie">
    <legend>NOVO PROCEDIMENTO</legend><br />
    <div class="form-group" id="login">
      <label>NOME : </label>
      <!-- o campo “name” dentro do input e importante, pois será ele que armazenará os dados digitados .-->
      <input type="text" name="login" id="login"  /><br />
      <div class="alert alert-danger" style="display: none" id="alertaLogin">
                    Campo obrigatório.
      </div>
    </div>
    <div class="form-group" id="id">
      <label>VALOR :</label>
      <input type="text" name="valor" id="valor" /><br />
      <div class="alert alert-danger" style="display: none" id="alertaValor">
                    Campo obrigatório.
      </div>
    </div>
    <input class="btn btn-primary" type="submit" value="CADASTRAR    "  />
    </fieldset>
    </form>
@endsection('content')
