<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
   return view('/index');
});

Route::controller(ClientController::class)->group(function(){
   Route::get('/index', 'index');
   
}); 