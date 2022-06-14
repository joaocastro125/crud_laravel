@extends('layouts.admin')

@section('title','Adicão de tarefas')

@section('content') 

  <h1>Adicão</h1>

  <form action="" method="POST">
    @csrf

    <label for="">
      Titulo:
    </label>

    <input type="text" name="titulo">
    <input type="submit" value="adcionar">

  </form>

 @endsection