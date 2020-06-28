<?php
//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});
//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});
//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});
//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});
//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});
//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' => 'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

//Route::get('ventaadmision/cola2', 'VentaadmisionController@cola');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);

Route::get('/', function () {
    return redirect('/dashboard');
});   

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return View::make('layouts.app');
    });
    /* PLATO */
    Route::post('plato/buscar', 'PlatoController@buscar')->name('plato.buscar');
    Route::get('plato/eliminar/{id}/{listarluego}', 'PlatoController@eliminar')->name('plato.eliminar');
    Route::get('plato/crearsimple', 'PlatoController@crearsimple')->name('plato.crearsimple');
    Route::post('plato/guardarsimple', 'PlatoController@guardarsimple')->name('plato.guardarsimple');
    Route::get('plato/autocompletarplato/{searching}', 'PlatoController@autocompletarplato')->name('plato.autocompletarplato');

    /*PERSON*/
    Route::get('person/employeesautocompleting/{searching}', 'PersonController@employeesautocompleting')->name('person.employeesautocompleting');

    Route::get('plato/ingredienteautocompleting/{searching}', 'PlatoController@ingredienteautocompleting')->name('plato.ingredienteautocompleting');

    Route::get('plato/cargarIngredienteMicro', 'PlatoController@cargarIngredienteMicro')->name('plato.cargarIngredienteMicro');

    Route::get('plato/cargarPlatos', 'PlatoController@cargarPlatos')->name('plato.cargarPlatos');

    Route::resource('plato', 'PlatoController', array('except' => array('show')));

    Route::get('verPlato', 'PlatoController@verPlato')->name('plato.verPlato');

    Route::post('categoriaopcionmenu/buscar', 'CategoriaopcionmenuController@buscar')->name('categoriaopcionmenu.buscar');
    Route::get('categoriaopcionmenu/eliminar/{id}/{listarluego}', 'CategoriaopcionmenuController@eliminar')->name('categoriaopcionmenu.eliminar');
    Route::resource('categoriaopcionmenu', 'CategoriaopcionmenuController', array('except' => array('show')));

    Route::post('opcionmenu/buscar', 'OpcionmenuController@buscar')->name('opcionmenu.buscar');
    Route::get('opcionmenu/eliminar/{id}/{listarluego}', 'OpcionmenuController@eliminar')->name('opcionmenu.eliminar');
    Route::resource('opcionmenu', 'OpcionmenuController', array('except' => array('show')));

    Route::post('tipousuario/buscar', 'TipousuarioController@buscar')->name('tipousuario.buscar');
    Route::get('tipousuario/obtenerpermisos/{listar}/{id}', 'TipousuarioController@obtenerpermisos')->name('tipousuario.obtenerpermisos');
    Route::post('tipousuario/guardarpermisos/{id}', 'TipousuarioController@guardarpermisos')->name('tipousuario.guardarpermisos');

    Route::get('tipousuario/eliminar/{id}/{listarluego}', 'TipousuarioController@eliminar')->name('tipousuario.eliminar');
    Route::resource('tipousuario', 'TipousuarioController', array('except' => array('show')));
    Route::post('usuario/buscar', 'UsuarioController@buscar')->name('usuario.buscar');
    Route::get('usuario/eliminar/{id}/{listarluego}', 'UsuarioController@eliminar')->name('usuario.eliminar');
    Route::get('usuario/escogerSucursal','UsuarioController@escogerSucursal')->name('usuario.escogerSucursal');
    Route::post('usuario/guardarSucursal','UsuarioController@guardarSucursal')->name('usuario.guardarSucursal');
    Route::resource('usuario', 'UsuarioController', array('except' => array('show')));

    Route::get('plato/inicializarTablaIngredientes','PlatoController@inicializarTablaIngredientes')->name('plato.inicializarTablaIngredientes');

    Route::post('categoria/buscar', 'CategoriaController@buscar')->name('categoria.buscar');
    Route::get('categoria/eliminar/{id}/{listarluego}', 'CategoriaController@eliminar')->name('categoria.eliminar');
    Route::resource('categoria', 'CategoriaController', array('except' => array('show')));

    Route::post('unidad/buscar', 'UnidadController@buscar')->name('unidad.buscar');
    Route::get('unidad/eliminar/{id}/{listarluego}', 'UnidadController@eliminar')->name('unidad.eliminar');
    Route::resource('unidad', 'UnidadController', array('except' => array('show')));

    Route::post('ingrediente/buscar', 'IngredienteController@buscar')->name('ingrediente.buscar');
    Route::get('ingrediente/eliminar/{id}/{listarluego}', 'IngredienteController@eliminar')->name('ingrediente.eliminar');
    Route::resource('ingrediente', 'IngredienteController', array('except' => array('show')));   
});