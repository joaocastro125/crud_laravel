<?php

use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/tarefa')->group(function(){
   Route::get('/',[TarefaController::class,'list'])->name('tarefa.list');//Listagem de Tarefas

   Route::get('add',[TarefaController::class,'add'])->name('tarefa.add');//tela de edicao
   Route::post('add',[TarefaController::class,'addAction']);//Acão de edicao

   Route::get('edit/{id}',[TarefaController::class,'edit'])->name('tarefa.edit');//Tela de edicao
   Route::post('edit/{id}',[TarefaController::class,'editAction']);//Acão de edicao

   Route::get('delete/{id}',[TarefaController::class,'del'])->name('tarefa.del');//Ação de excluir

});

Route::fallback(function(){
   return view('404');
});
