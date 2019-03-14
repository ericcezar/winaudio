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

//Autenticação
Auth::routes();

//Grupo de rotas do software com autenticação de login
Route::group(['prefix'=>'/winaudio', 'middleware'=>'auth'], function(){

    //Rota de Listar Anamnese
    Route::get('/anamnese/list', 'AnamneseController@index')->name('listAnamnese');
    //Rota da View para Criar Anamnese
    Route::get('/anamnese/new', 'AnamneseController@createAnamnese')->name('newAnamnese');
    //Rota de Criar Anamnese
    Route::post('/anamnese/store', 'AnamneseController@storeAnamnese')->name('storeAnamnese');
    //Rota de Visualizar Anamnese
    Route::get('/anamnese/view', 'AnamneseController@viewAnamnese')->name('viewAnamnese');
    //Rota de Editar Anamnese
    Route::get('/anamnese/{anamnese}/edit', 'AnamneseController@editAnamnese')->name('editAnamnese');
    Route::post('/anamnese/{anamnese}/update','AnamneseController@updateAnamnese')->name('updateAnamnese');
    //Rota de Excluir Anamnese
    Route::get('/anamnese/delete/{anamnese}','AnamneseController@delete')->name('deleteAnamnese');
});

//Rota para realizar o logout do sistema
Route::post('/logout','LogoutController@Logout')->name('Logout');
