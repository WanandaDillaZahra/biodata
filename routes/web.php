<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertadidikR;
use App\Http\Controllers\GuruR;
use App\Http\Controllers\PesertadidikPDF;
use App\Http\Controllers\userC;

Route::get('pesertadidik/pdf', [PesertadidikPDF::class, 'pdf'])
->middleware('auth');
Route::resource('pesertadidik', PesertadidikR::class)
->middleware('auth');
Route::resource('guru', GuruR::class)
->middleware('auth');

// Route::get('pdf', [PesertadidikPDF::class, 'pdf']);

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('/adminlte', function () {
    return view('adminlte');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/pesertadidik', function () {
    return view('pesertadidik');
})->middleware('auth');;

Route::get('/guru', function () {
    return view('guru');
})->middleware('auth');;

Route::get('register', [userC::class, 'register'])->name('register');
Route::get('login', [userC::class, 'login'])->name('login');
Route::post('register', [userC::class, 'register_action'])->name('register.action');
Route::post('login', [userC::class, 'login_action'])->name('login.action');
Route::get('logout', [userC::class, 'logout'])->name('logout');