@extends('layouts.admin')

@section('title','listagem de tarefas')

@section('content') 

  <h1>Listagem</h1>

  {{-- @component('alert')
   @slot('type')
   testando 1,2,3...
  @endcomponent --}}

  <a href="{{route('tarefa.add')}}">adicionar nova tarefa</a>
  @if(count($list)>0)
 
  <ul>
    @foreach($list as $item)
  <li>
    {{$item->titulo}}
    <a href="{{route('tarefa.edit',['id'=>$item->id])}}">[editar]</a>
    <a href="{{route('tarefa.del',['id'=>$item->id])}}">[excluir]</a>
</li>
@endforeach
</ul>
 @else

NÃO HÁ MESSAGEM NA LISTA
     

     

  @endif


     
@endsection
  

