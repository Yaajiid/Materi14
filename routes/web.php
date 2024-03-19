<?php

use App\Http\Controllers\CastController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template.master');
});

//Rute untuk menampilkan daftar pemain film (index)
Route::get('/cast', [CastController::class, 'index'])->name('cast.index');

//Rute untuk menampilkan formulir pembuatan data pemain film baru (create)
Route::get('/cast/create', [CastController::class, 'create']);

//Rute untuk menyimpan data pemain film baru (store)
Route::post('/cast', [CastController::class, 'store']);

//Rute untuk menampilkan detail data pemain film dengan ID tertentu (show)
Route::get('/cast/{cast_id}', [CastController::class, 'show']);

//Rute untuk menampilkan formulir pengeditan data pemain film dengan ID tertentu (edit)
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);

//Rute untuk menyimpan perubahan data pemain film (update)
Route::put('/cast/{cast_id}', [CastController::class, 'update']);

//Rute untuk menghapus data pemain film dengan ID tertentu (destroy)
Route::delete('/casts/{cast}', [CastController::class, 'destroy']);


