<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
   return view('client.index');
});

Route::controller(ClientController::class)->group(function(){
   Route::get('/index', 'index');
   Route::get('/create', 'create');
   Route::post('/store', 'store');
   Route::get('/show/{id}', 'show');
   Route::get('edit/{id}', 'edit');
   Route::post('/update/{id}', 'update');
   Route::get('/delete/{id}', 'destroy');
}); 