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

/* Route::get('/', function () {
    return view('welcome');
}); */

use App\Mail\NewClienteRegister;
use App\Mail\Newsletter;

Route::get('/', 'CountdownController@index')->name('countdown');
Route::post('/registar', 'CountdownController@register')->name('register');
Route::post('/newsletter', 'CountdownController@newsletter')->name('newsletter');

Route::get('/email', function(){
    return new NewClienteRegister('Mauricio');
});

Route::get('/newsletter-email', function(){
    return new Newsletter;
});

Route::get('/prueba-email',function(){
    return new NewClienteRegister('hola');
});