@extends('usuarios.operadorhome')

@section('content')

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

      @foreach( $procedimentos as $procedimento )
      <tr>
        <td>{{$procedimento->id}}</td>
        <td>{{$procedimento->name}}</td>
        <td>{{$procedimento->price}}</td>
        <td>{{$procedimento->user_id}}</td>
        <td>{{$procedimento->created_at}}</td>
        <td>{{$procedimento->updated_at}}</td>
      </tr>
    @endforeach

  </table>
    <form method="post" action="{{ route('procedimentos.update', [ 'procedimento' => $procedimento->id]) }}" id="formlogin" name="formlogin" >
      @csrf
       @method('PATCH')
    <fieldset id="fie">
    <legend>ATUALIZA PROCEDIMENTO</legend><br />
    <legend>Selecione o procedimento desejado</legend><br />
    <div class="form-group" id="id">
      Procedimento:
            <!-- <input type="text" name="estado_id"> <br> //-->
            <select name="id">
              <option value="">Selecione:</option>
              <!-- Dados dos estados //-->
              @foreach($procedimentos as $p)
                <option value="{{ $p->id }}">{{ $p->name }}-{{ $p->price }}</option>
              @endforeach
            </select>
      <div class="alert alert-danger" style="display: none" id="alertaID">
                    Campo obrigatório.
      </div>
    </div>
    <div class="form-group" id="price">
      <label>VALOR :</label>
      <input type="text" name="price" id="price" /><br />
      <div class="alert alert-danger" style="display: none" id="alertaValor">
                    Campo obrigatório.
      </div>
    </div><br>
    <input class="btn btn-primary" type="submit" value="ATUALIZAR    "  />
    </fieldset>
    </form>
  </body>
@endsection('content')
