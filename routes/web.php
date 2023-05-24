<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('site.home.index');
})->name('home');


require __DIR__.'/auth.php';

require __DIR__.'/Admin.php';


/** ============================================================================== */
/** |                                                                            | */
/** |                                                                            | */
/** |                            Rotas de Aleatoria                              | */
/** |                                                                            | */
/** |                                                                            | */
/** ============================================================================== */


// Rota 404 do Admin
Route::any('{any}', function () {
    return response()->view('admin.404.index', [], 404);
})->where('any', '.*');
