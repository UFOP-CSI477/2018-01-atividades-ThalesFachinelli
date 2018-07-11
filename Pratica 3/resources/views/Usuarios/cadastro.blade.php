@extends('layout.principal')

@section('content')


    <form method="post" action="{{ route('usuarios.store') }}" id="formlogin" name="formlogin" >
      @csrf
    <fieldset id="fie">
    <legend>NOVO USUÁRIO</legend><br />
    <div class="form-group" id="name">
      <label>NOME : </label>
      <!-- o campo “name” dentro do input e importante, pois será ele que armazenará os dados digitados .-->
      <input type="text" name="name" id="name"  /><br />
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
    <div class="form-group" id="password">
      <label>SENHA :</label>
      <input type="password" name="password" id="password" /><br />
      <div class="alert alert-danger" style="display: none" id="alertaSenha">
                    Senha é campo obrigatório.
      </div>
    </div>
    <input class="btn btn-primary" type="submit" value="CADASTRAR    "  />
    </fieldset>
    </form>
@endsection('content')
