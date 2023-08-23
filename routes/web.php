<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TarefaController::class, 'index']);
Route::get('/listar-tarefas', [TarefaController::class, 'index']);
Route::get('/visualizar-tarefa/{id}', [TarefaController::class, 'show']);
Route::get('/cadastrar-tarefa', [TarefaController::class, 'create']);
Route::post('/cadastrar-tarefa', [TarefaController::class, 'store']);

