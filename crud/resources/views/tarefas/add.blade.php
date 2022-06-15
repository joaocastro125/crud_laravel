@extends('layouts.admin')

@section('title','Adicão de tarefas')

@section('content') 

    <h1>Adicão</h1>
  
     
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

    <input type="text" name="titulo">
    <input type="submit" value="adcionar">

    </form>

 @endsection