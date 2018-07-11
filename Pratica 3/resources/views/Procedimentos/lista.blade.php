@extends('layout.principal')

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
@stop
