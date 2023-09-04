<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertadidikR;
use App\Http\Controllers\GuruR;

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/adminlte', function () {
    return view('adminlte');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/pesertadidik', function () {
    return view('pesertadidik');
});

Route::get('/guru', function () {
    return view('guru');
});

Route::resource('pesertadidik', PesertadidikR::class);
Route::resource('guru', GuruR::class);