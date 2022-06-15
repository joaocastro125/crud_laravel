@extends('layouts.admin')

@section('title','Edição de tarefas')

@section('content') 

  <h1>Edição</h1>


  @if(session('warning'))
  <div style="border:1px solid #ff0000;padding:20px;">
 
    {{session('warning')}}
  </div>
  
  @endif

<form action="" method="POST">
@csrf

<label for="">
 Titulo:
</label>

<input type="text" name="titulo" value="{{$data->titulo}}">
<input type="submit" value="salvar">

</form>

@endsection

  

