<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {


    // return view('welcome');
    return "Bienvenido";
});

Route::get('cursos', function () {
    return "Bienvenido al curso";
});
Route::get('cursos/create', function () {
    return "En esta página podria crear un curso";
});
/** Route::get('cursos/{curso}', function ($curso) {
 *   return "Bienvenido al curso: $curso" ;
 *});
 */

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso: $curso, de la categoria $categoria ";
    } else {
        return "Bienvenido al curso: $curso";
    }
});
