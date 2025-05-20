<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    
   // return view('welcome');
    return "Bienvenido" ;

});
Route::get('/curso', function () {

    
   // return view('welcome');
    return "Bienvenido al curso" ;

});