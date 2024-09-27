<?php

use App\Http\Controllers\mini_game_controller;
use Illuminate\Support\Facades\Route;

Route::controller(mini_game_controller::class)->group(function(){
    Route::get('/','view')->name('view');
    Route::get('/game','viewgame')->name('game');
    Route::get('/history','history')->name('history');

    Route::post('/insert','insert')->name('f_insert');
    Route::post('/update','update')->name('f_update');
});