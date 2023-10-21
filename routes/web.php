<?php

use App\Http\Controllers\BilheteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\EncomendaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//Route::resource('home', DestinoController::class);

//Route::resource('encomenda', EncomendaController::class);

Route::resource('bilhete', BilheteController::class);
Route::resource('users', UserController::class);

Route::get('/', [SiteController::class, 'index' ]) ->name('site.index');
Route::get('/encomendas', [SiteController::class, 'encomenda']) ->name('site.encomendas');

//rotas de login/logout/criar conta
Route::view('/login', 'login.login')-> name('login.login');
Route::post('/auth', [LoginController::class,'auth'])->name('login.auth');
Route::get('/logout',[LoginController::class,'logout'])->name('login.logout');
Route::get('/register',[LoginController::class,'create'])->name('login.create');

//rota da dashboard
Route::get('/admin/dashboard',[DashboardController::class,'index'])-> name('admin.dashboard')->middleware('auth', 'checkemail');


/*
Route::get('/login', function(){
    return view('site/login');
});
Route::get('/encomendas', function (){
    return view('site/encomendas');
});

});*/
Route::get('/criar',function(){
    return view('login/criarConta');
});