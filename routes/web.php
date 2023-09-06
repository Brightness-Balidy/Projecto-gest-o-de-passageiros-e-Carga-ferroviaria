<?php

use App\Http\Controllers\BilheteController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\EncomendaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::resource('home', DestinoController::class);

//Route::resource('encomenda', EncomendaController::class);

Route::resource('bilhete', BilheteController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('site/login');
});
Route::get('/encomendas', function (){
    return view('site/encomendas');
});
Route::get('/criar_conta',function(){
    return view('admin/CriarConta');
});