<?php

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

// // Rotas Autenticadas
// Route::get('/', function () {
//     return view('main');
// })->middleware('auth');

Route::get('/', function () {
    return view('main');
});



// Route::group(['middleware' => 'auth'], function() {
//     Route::get('/curso', 'CursoController@listar');
//     Route::get('/turma', 'TurmaController@listar');
//     Route::get('/aluno', 'AlunoController@listar');
//     Route::get('/disciplina', 'DisciplinaController@listar');
//     Route::get('/conceito', 'ConceitoController@listar');
//     Route::get('/relatorio', 'RelatorioController@listar');
//     Route::get('/importar', 'ImportarController@listar');
//     Route::get('/exportar', 'ExportarController@listar');
// });

    Route::get('/curso', 'CursoController@listar');
    Route::get('/turma', 'TurmaController@listar');
    Route::get('/aluno', 'AlunoController@listar');
    Route::get('/disciplina', 'DisciplinaController@listar');
    Route::get('/conceito', 'ConceitoController@listar');
    Route::get('/relatorio', 'RelatorioController@listar');
    Route::get('/importar', 'ImportarController@listar');
    Route::get('/exportar', 'ExportarController@listar');

// Rota Não-Autenticadas
Auth::routes();

Route::get('/logout', function() {
    Auth::logout();
    Session::flush();
    return Redirect::to('/login');
});
