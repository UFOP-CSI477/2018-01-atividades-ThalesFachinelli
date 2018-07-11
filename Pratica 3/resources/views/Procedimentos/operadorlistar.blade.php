@extends('usuarios.operadorhome')

@section('content')
<h1>Lista de Procedimentos</h1>

<table class="table-bordered">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Requisitado por</th>
    <th>Cadastrado em</th>
    <th>Atualizado em</th>
  </tr>
  @foreach ($procedimentos as $procedimento)
  <tr>
    <td>{{$procedimento->name}}</td>
    <td>{{$procedimento->id}}</td>
    <td>{{$procedimento->user_id}}</td>
    <td>{{$procedimento->price}}</td>
    <td>{{$procedimento->created_at}}</td>
    <td>{{$procedimento->updated_at}}</td>
  </tr>
  @endforeach
</table>
@endsection('content')
