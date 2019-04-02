<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/listaFuncionarios', "FuncionarioController@index");
Route::get('/cadastror', "CadastroController@index");
Route::post('/cadastr', "FuncionarioController@store");
Route::get('/cadastrar', "FuncionarioController@create");
Route::get('/cadastrar', "CadastroController@create");
Route::get('/cadastros', "CadastroController@edit");
Route::post('/cadastrar', "CadastroController@inicial")->name('cadastro.verificar');
Route::post('/cadastro', "CadastroController@destroy");
Route::post('/login', "CadastroController@inicio");
Route::post('/cadastro/login', "CadastroController@store");
Route::get('/funcionario', "CadastroController@index")->name('funcionario.index');
Route::resource('funcionario', 'FuncionarioController');
Route::resource('cadastro', 'CadastroController');
Route::get('/cadastrol', function(){
    return view('cadastro_login');
});
Route::get('/recuperar', function(){
    return view('recuperar_senha');
});



Route::get('/cadastro/cadastrar', function(){
    return view('cadastro_login');
});

Route::get('/departamento', function(){
    return view('telacadastrardepartamento');
});

Route::get('/sala', function(){
    return view('telacadastrosala');
});

Route::get('/inicio', function(){
    return view('telainicial');
});

Route::get('/login', function(){
    return view('telalogin');
});

