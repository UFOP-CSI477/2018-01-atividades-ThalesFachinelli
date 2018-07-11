@extends('usuarios.adminhome')

@section('content')
<form method="post" action="{{ route('exames.store') }}" id="formlogin" name="formlogin" >
  @csrf
    <fieldset id="fie">
    <legend>NOVO EXAME</legend><br />
    <select name="id">
      <option value="">Selecione:</option>
      <!-- Dados dos estados //-->
      @foreach($procedimentos as $p)
        <option value="{{ $p->id }}">{{ $p->name }}-{{ $p->price }}</option>
      @endforeach
    </select>
    <label>DATA :</label>
    <input type="date" name="data"><br>
    <input class="btn btn-primary" type="submit" value="CADASTRAR    "  />
    </fieldset>
    </form>

  </body>
  @endsection('content')
