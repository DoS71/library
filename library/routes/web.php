<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AutorController;


Route::controller(HomeController::class)->group(function(){
    Route::view('/', 'home.index')->name('h.index');
    //Route::get('/', 'index')->name('h.index');
    Route::get('/home', 'home')->middleware('auth')->name('h.home');
});


Route::middleware('auth')->group(function(){
    Route::resource('/autorzy', AutorController::class);
});



// routing
// walidacja - zasady
// widoki
// controllery
// dyrektywy blade najwazniejsze
// klasy pomocnicze (str, )
// kolekcje

