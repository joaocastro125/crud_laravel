<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarefaController extends Controller
{
    public function list(){

        $list=DB::select('SELECT * FROM tarefas');




       return view('tarefas.list',[
        'list'=>$list
       ]);
      
        

    }
    public function add(){

        return view('tarefas.add');
        
    }

    public function addAction(Request $request){
       
        if($request->filled('titulo')){
          $titulo=$request->input('titulo');
          DB::insert('INSERT INTO tarefas(titulo) VALUE(:titulo)',[
            'titulo'=>$titulo
          ]);
          return redirect()->route('tarefa.list');
        }else{

        }
        return view('tarefas.add');
    }
    public function edit(){
        return view('tarefas.edit');
    }
    public function editAction(){
        
    }
    public function del(){
        
    }
}
