<?php

Auth::routes();

//EVENTOS
Route::get('/', 'EventoController@index');
Route::get('/Eventos', 'EventoController@index')->name('evento.index');
Route::post('/Eventos', 'EventoController@crearEvento')->name('evento.crear');
Route::post('/Eventos/searchContact','EventoController@searchContact')->name('evento.searchContact');
Route::post('/EdicionEvento/{Evento}','EventoController@editarEvento')->name('evento.editar');
Route::post('/EliminarEvento/{Evento}', 'EventoController@EliminarEventos')->name('evento.destroy');


//LISTAS
Route::get('/Listas', 'MisListasController@index')->name('lista.index');
Route::post('/Listas', 'MisListasController@crearLista')->name('lista.crear');
Route::delete('/Listas/{Lista}', 'MisListasController@eliminarLista')->name('lista.destroy');

//CONTACTOS
Route::get('/Contactos','MisContactosController@index')->name('contacto.index');
Route::post('/Contactos','MisContactosController@crearContacto')->name('contacto.crear');
Route::delete('/Contactos/{Contacto}', 'MisContactosController@EliminarContacto')->name('contacto.destroy');


//Get Provincias
Route::get('provincias/{idPais}','MisContactosController@getProv');


//data table
Route::get('/Eventos/datatable', 'EventoController@eventoData')->name('datatable.eventos');
Route::get('/Contactos/datatable', 'MisContactosController@contactoData')->name('datatable.contactos');
Route::get('/Listas/datatable', 'MisListasController@listaData')->name('datatable.listas');




//INICIO DE SESION CON REDES SOCIALES
Route::get('/facebook', 'Auth\LoginController@redirectToFacebookProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderFacebookCallback');
