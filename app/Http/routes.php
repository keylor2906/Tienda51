<?php

Route::get('/', function () {
    return view('website.index');
});


Route::get('/tienda', function () {
    
    return view('website.tienda');
});

Route::get('/carrito', function () {
    
    return view('website.carrito');
});

Route::get('/acerca', function () {
    
    return view('website.acerca');
});

Route::get('/contacto', function () {
    
    return view('website.contacto');
});

/*Route::get('/ingresar', function () {
    
    return view('website.ingresar');
});

Route::get('/user', function () {
    $usuario= \DB::table('usuario')->insert([
        'nombre' => 'jose',
        'nick' => 'keylor29',
        'email' => 'jose@gmail.com',
        'password' => \Hash::make('123'),
        'tipo' => 1,
        ]);
    });

Route::get('/user', function () {
    $usuario= \DB::table('usuario')->insert([
        'nombre' => 'martin',
        'nick' => 'fantasma',
        'email' => 'fantasma@gmail.com',
        'password' => \Hash::make('123'),
        'tipo' => 2,
        ]);
    });
*/

Route::post('/mensajes', 'mensajesController@store');

Route::post('/login', 'LoginController@store');

Route::get('/ingresar', 'LoginController@index');

Route::group(['middleware' => ['admin']], function(){
    get('/administrador','AdministradorController@index');
    get('/logout','AdministradorController@logout');
});

Route::group(['middleware' => ['client']], function(){
    get('/cliente','ClienteController@index');
    get('/cliente/logout','ClienteController@logout');
});

Route::get('/registrar', function () {
    
    return view('website.registrar');
});

Route::post('/registrar', 'ClienteController@store');