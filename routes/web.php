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
Auth::routes();

//EVENTOS
Route::get('/', 'EventoController@index');
Route::get('/Eventos', 'EventoController@index')->name('evento.index');
Route::get('/Eventos/nuevo', 'EventoController@nuevoEvento');
Route::post('/Eventos', 'EventoController@crearEvento')->name('evento.crear');
Route::get('/Eventos/editar/{Evento}', 'EventoController@edicionEvento')->name('evento.editar.pagina');
Route::put('/Eventos/editar/{Evento}', 'EventoController@editarEvento')->name('evento.editar');
Route::get('/Eventos/Detalle/{Evento}', 'EventoController@DetalleEventos')->name('evento.detalle');
Route::delete('/Eventos/{Evento}', 'EventoController@EliminarEventos')->name('evento.destroy');


//LISTAS
Route::get('/Listas', 'MisListasController@index')->name('lista.index');
Route::get('/Listas/nueva','MisListasController@nuevaLista')->name('lista.nueva');
Route::post('/Listas', 'MisListasController@crearLista')->name('lista.crear');
Route::get('/Listas/editar/{Lista}', 'MisListasController@edicionLista')->name('lista.editar.pagina');
Route::put('/Listas/editar/{Lista}', 'MisListasController@editarLista')->name('lista.editar');
Route::get('/Listas/Detalle/{Lista}', 'MisListasController@detalleLista')->name('lista.detalle');
Route::delete('/Listas/{Lista}', 'MisListasController@eliminarLista')->name('lista.destroy');

//CONTACTOS
Route::get('/Contactos','MisContactosController@index')->name('contacto.index');
Route::get('/Contactos/nuevo','MisContactosController@nuevoContacto')->name('contacto.nuevo');
Route::post('/Contactos','MisContactosController@crearContacto')->name('contacto.crear');
Route::get('/Contactos/editar/{Contacto}', 'MisContactosController@edicionContacto')->name('contacto.editar.pagina');
Route::put('/Contactos/editar/{Contacto}', 'MisContactosController@EditarContacto')->name('contacto.editar');
Route::get('/Contactos/Detalle/{Contacto}','MisContactosController@DetalleContactos')->name('contacto.detalle');
Route::delete('/Contactos/{Contacto}', 'MisContactosController@EliminarContacto')->name('contacto.destroy');
Route::get('/Contactos/Detalle/{Contacto}/eventos','MisContactosController@verEventoContacto')->name('evento.contacto');



//INICIO DE SESION CON REDES SOCIALES
Route::get('/facebook', 'Auth\LoginController@redirectToFacebookProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderFacebookCallback');

