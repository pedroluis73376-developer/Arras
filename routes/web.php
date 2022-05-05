<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@welcome')->name('index');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//rutas del distribuidor
Route::get('/distribuidores', 'DistribuidorController@index')->name('distribuidor.index')->middleware('auth');
Route::get('/distribuidores/create', 'DistribuidorController@create')->name('distribuidor.create')->middleware('auth');
Route::post('/distribuidores', 'DistribuidorController@store')->name('distribuidor.store')->middleware('auth');
Route::get('/distribuidores/{distribuidor}', 'DistribuidorController@show')->name('distribuidor.show')->middleware('auth');
Route::get('/distribuidores/{distribuidor}/edit', 'DistribuidorController@edit')->name('distribuidor.edit')->middleware('auth');
Route::put('/distribuidores/{distribuidor}', 'DistribuidorController@update')->name('distribuidor.update')->middleware('auth');
Route::delete('/distribuidores/{distribuidor}', 'DistribuidorController@destroy')->name('distribuidor.destroy')->middleware('auth');

//rutas usuarios
Route::get('/usuarios', 'UsuariosController@index')->name('usuarios.index')->middleware('auth');
Route::get('/usuarios/create', 'UsuariosController@create')->name('usuarios.create')->middleware('auth');
Route::post('/usuarios', 'UsuariosController@store')->name('usuarios.store')->middleware('auth');
Route::get('/usuarios/{usuario}', 'UsuariosController@show')->name('usuarios.show')->middleware('auth');
Route::get('/usuarios/{usuario}/edit', 'UsuariosController@edit')->name('usuarios.edit')->middleware('auth');
Route::put('/usuarios/{usuario}', 'UsuariosController@update')->name('usuarios.update')->middleware('auth');
Route::delete('/usuarios/{usuario}', 'UsuariosController@destroy')->name('usuarios.destroy')->middleware('auth');

//rutas metales 
Route::get('/metales', 'MetalController@index')->name('metales.index')->middleware('auth');
Route::get('/metales/create', 'MetalController@create')->name('metales.create')->middleware('auth');
Route::post('/metales', 'MetalController@store')->name('metales.store')->middleware('auth');
Route::delete('/metales/{metal}', 'MetalController@destroy')->name('metales.destroy')->middleware('auth');

//ruta frentes
Route::get('/frentes', 'FrenteController@index')->name('frentes.index')->middleware('auth');
Route::get('/frentes/create', 'FrenteController@create')->name('frentes.create')->middleware('auth');
Route::post('/frentes', 'FrenteController@store')->name('frentes.store')->middleware('auth');
Route::delete('/frentes/{frente}', 'FrenteController@destroy')->name('frentes.destroy')->middleware('auth');

//rutas de los tamaños
Route::get('/sizes', 'SizeController@index')->name('sizes.index')->middleware('auth');
Route::get('/sizes/create', 'SizeController@create')->name('sizes.create')->middleware('auth');
Route::post('/sizes', 'SizeController@store')->name('sizes.store')->middleware('auth');
Route::delete('/sizes/{size}', 'SizeController@destroy')->name('sizes.destory')->middleware('auth');

//ruta de las vueltas
Route::get('/vueltas', 'VueltaController@index')->name('vueltas.index')->middleware('auth');
Route::get('/vueltas/create', 'VueltaController@create')->name('vueltas.create')->middleware('auth');
Route::post('/vueltas', 'VueltaController@store')->name('vueltas.store')->middleware('auth');
Route::delete('/vueltas/{vuelta}', 'VueltaController@destroy')->name('vueltas.destroy')->middleware('auth');

//rutas de panel de administracion de arras
Route::get('/arras', 'ArraController@index')->name('arras.index')->middleware('auth');
Route::get('/arras/create', 'ArraController@create')->name('arras.create')->middleware('auth');
Route::post('/arras', 'ArraController@store')->name('arras.store')->middleware('auth');
Route::get('/arras/{arra}/edit', 'ArraController@edit')->name('arras.edit')->middleware('auth');
Route::put('/arras/{arra}', 'ArraController@update')->name('arras.update')->middleware('auth');

//ruta para mostrar las arras y realizar la cotizacion
Route::get('/arras/{arra}', 'ArraController@show')->name('arras.show');

//rutas de catalogo de arras y realizar cotizaciones
Route::get('/productos', 'CatalogoController@index')->name('catalogo.index');
Route::get('/productos/{arra}', 'CatalogoController@show')->name('catalogo.show')->middleware('auth');

//ruta de contacto
Route::get('/mensajes', 'ContactoController@index')->name('contactos.index');
Route::get('/mensajes/create', 'ContactoController@create')->name('contactos.create');
Route::post('/contactos', 'ContactoController@store')->name('contactos.store');
Route::put('/contactos/{contacto}', 'ContactoController@update')->name('contactos.update')->middleware('auth');

//ruta de cotizaciones
Route::post('/cotizaciones', 'CotizacionesController@store')->name('cotizaciones.store')->middleware('auth');
Route::get('/cotizaciones', 'CotizacionesController@index')->name('cotizaciones.index')->middleware('auth');
Route::get('/cotizaciones/user', 'CotizacionesController@user')->name('cotizaciones.user')->middleware('auth');
Route::put('/cotizaciones/{cotizacion}', 'CotizacionesController@update')->name('cotizaciones.update')->middleware('auth');

//rutas para editar la infomacion de la pantalla de inicio
Route::get('/informacion', 'HomeController@welcomeADM')->name('informacion.index');
Route::put('/informacion/{informacion}', 'HomeController@updateHeader')->name('informacion.updateHeader');
Route::put('/informacion2/{informacion}', 'HomeController@updateLMV1')->name('informacion.updateLMV1');
Route::put('/informacion3/{informacion}', 'HomeController@updateLMV2')->name('informacion.updateLMV2');
Route::put('/informacion4/{informacion}', 'HomeController@updateLMV3')->name('informacion.updateLMV3');
Route::put('/informacion5/{informacion}', 'HomeController@updateFotter1')->name('informacion.updateFotter1');
Route::put('/informacion6/{informacion}', 'HomeController@updateFotter2')->name('informacion.updateFotter2');