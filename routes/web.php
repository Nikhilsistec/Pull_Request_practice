<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;




// Route::get('/show',[PageController::class,'show_data'])->name('showname');
// Route::get('/data/{id}',[PageController::class,'data_show'])->name('data');
// Route::get('/',[PageController::class,'for_view'])->name('home');




Route::controller(PageController::class)->group(function()
{
    Route::get('/show','show_data')->name('showname');
    Route::get('/data/{id}','data_show')->name('data');
    Route::get('/','for_view')->name('home');
});


Route::get('/test',TestingController::class);

Route::get('/hide',[PageController::class,'hidden_fun']);

Route::get('/CHeck',[PageController::class,'Check_fun']);

Route::get('/test',[PageController::class,'Data_Testing']);


Route::get('/sum',[PageController::class,'SumNumber']);