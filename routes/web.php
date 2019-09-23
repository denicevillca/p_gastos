<?php


Route::get('/', 'Paginacontroller@inicio')->name('inicio');

Route::get('/detalle/{id}', 'Paginacontroller@detalle')->name('gasto.detalle');


Route::get('/editar/{id}','PaginaController@editar')->name('gasto.editar');


Route::put('/editar/{id}','PaginaController@actualizar')->name('gasto.actualizar');


Route::delete('/eliminar/{id}','Paginacontroller@eliminar')->name('gasto.eliminar');


Route:: get('fotos',function(){
return view('foto');

})->name('gasto');

Route::get('/inicio','PaginaController@inicio1')->name('inicio1');

Route:: get('blog',function(){
return view('blog');

})->name('ingreso');

Route::post('/','PaginaController@crear')->name('gasto.crear');