<?php

use App\Http\Controllers\BilheteController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\EncomendaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::resource('home', DestinoController::class);

//Route::resource('encomenda', EncomendaController::class);

Route::resource('bilhete', BilheteController::class);

Route::get('/', [SiteController::class, 'index']) ->name('site.index');
Route::get('/', [EncomendaController::class, 'index']) ->name('site.encomendas');

Route::get('/login', function(){
    return view('site/login');
});
Route::get('/encomendas', function (){
    return view('site/encomendas');
});
Route::get('/criar_conta',function(){
    return view('admin/CriarConta');
});