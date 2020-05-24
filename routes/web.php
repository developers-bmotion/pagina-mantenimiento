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

Route::get('/', 'CountdownController@index')->name('countdown');
Route::post('/registar', 'CountdownController@register')->name('register');

Route::get('/email', function(){
    return new NewClienteRegister('Mauricio');
});
