<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    
   // return view('welcome');
    return "Bienvenido" ;

});

Route::get('cursos', function () {
    return "Bienvenido al curso" ;
});
Route::get('cursos/create', function () {
    return "En esta página podria crear un curso";
});
Route::get('cursos/{curso}', function ($curso) {
    return "Bienvenido al curso: $curso" ;
});
