<?php

use App\Http\Controllers\BagagenController;
use App\Http\Controllers\BilheteController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\EncomendaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViagemController;
use App\Models\Cliente;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;


//Route::resource('home', DestinoController::class);

//Route::resource('encomenda', EncomendaController::class);


//relatorio
Route::get('generate-pdf',[PdfController::class, 'generatePdf']);
Route::resource('bilhete', BilheteController::class);
Route::resource('users', UserController::class);

Route::get('/', [SiteController::class, 'index' ]) ->name('site.index');
Route::get('/encomendas', [SiteController::class, 'encomenda']) ->name('site.encomendas');

//rotas de login/logout/criar conta
Route::view('/login', 'login.login')-> name('login.login');
Route::post('/auth', [LoginController::class,'auth'])->name('login.auth');
Route::get('/logout',[LoginController::class,'logout'])->name('login.logout');

Route::get('/register',[LoginController::class,'create'])->name('login.create');

Route::post('/criar',[UserController::class,'store'])->name('user.store');

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
//clientes
Route::get('/clientes',[ClienteController::class,'index'])-> name('site.clientes')->middleware('auth', 'checkemail');
Route::delete('site/clientes/delete/{id}',[ClienteController::class,'destroy'])->name('site.delete');
Route::post('/post',[ClienteController::class,'store']);
Route::get('/search',[ClienteController::class,'search']);
Route::post('site/clientes/show/{id}',[ClienteController::class, 'show'])->name('site.clientes.show');

//bilhetes
Route::get('/bilhetes',[BilheteController::class,'index'])-> name('site.bilhetes') ->middleware('auth', 'checkemail');
Route::post('site/bilhetes/store',[BilheteController::class,'store'])-> name('site.bilhetes.store');
Route::get('/searchBilhetes',[BilheteController::class, 'search']);
Route::post('site/bilheteria/delete/{id}',[BilheteController::class,'destroy'])->name('site.bilhetes.delete');
Route::post('site/bilheteria/show/{id}',[BilheteController::class,'show'])->name('site.bilhetes.show');

//Route::get('/search', [BilheteController::class,'search']);

//viagens
Route::get('/viagem',[ViagemController::class,'index'])->name('site.viagem')-> middleware('auth', 'checkemail');
Route::post('site/viagem/store',[ViagemController::class,'store'])->name('site.viagem.store');

//bagagens
Route::get('/encomendas',[EncomendaController::class,'index'])->name('site.encomendas')-> middleware('auth', 'checkemail');
Route::post('site/encomendas',[BagagenController::class,'store'])->name('site.bagagen.store');

//encomendas
Route::post('site/encomenda',[EncomendaController::class, 'store'])->name('site.encomendas.store');
Route::post('site/encomenda/delete/{id}', [EncomendaController::class, 'destroy'])->name('site.encomendas.delete');
Route::post('site/encomenda/show/{id}',[EncomendaController::class, 'show'])-> name('site.encomendas.show');
Route::post('site/encomenda/update/{id}',[EncomendaController::class,'update'])->name('site.encomendas.update');

//SMS API
Route::get('sendSMS', [App\Http\Controllers\TwilioSMSController::class, 'index'])->name('sendSMS');
