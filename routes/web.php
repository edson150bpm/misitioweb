<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', function (){
    return view('profile');
});
Route::get('/profile/editar', function (){
    return "Estas editando";
});
Route::get('/ver/{id}/{email}', function ($id, $email){
    return "Estas viendo el perfil numero ".$id. " con el email ".$email;
});
Route::group(['prefix' => 'admin', 'as' => 'admin'], function(){
    Route::get('/', function(){ return view('admin');});
    Route::get('/usuarios', function(){ return view('usuarios');});
});