@extends('usuarios.adminhome')

@section('content')
<h1>Lista de Procedimentos</h1>
<table class="table">
  @foreach ($procedimentos as $procedimento)
  <tr>
    <td>{{$procedimento->name}}</td>
    <td>{{$procedimento->id}}</td>
    <td>{{$procedimento->user_id}}</td>
    <td>{{$procedimento->price}}</td>
  </tr>
  @endforeach
</table>
<form method="post" action="{{ route('procedimentos.destroy', [ 'procedimento' => $procedimento->id]) }}" id="formlogin" name="formlogin" >
  @csrf
  @method('DELETE')
<fieldset id="fie">
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
</div><br>
<input class="btn btn-primary" type="submit" value="EXCLUIR    "  />
</fieldset>
</form>
@endsection('content')
