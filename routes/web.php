<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;



//Vistas principales
Route::get('/index', [ViewController::class, 'index']);
Route::get('/conoceme', [ViewController::class, 'conoceme'])->name('conoceme');
Route::get('/media', [ViewController::class, 'media'])->name('media');
Route::get('/clases', [ViewController::class, 'clases'])->name('clases');
Route::get('/eventos', [ViewController::class, 'eventos'])->name('eventos');
Route::get('/signIn', [ViewController::class, 'signIn'])->name('signIn');
Route::get('/politicaPrivacidad', [ViewController::class, 'politicaPrivacidad'])->name('politicaPrivacidad');
Route::get('/', [ViewController::class, 'index'])->name('inicio');
Route::get('/avisoLegal', [ViewController::class, 'avisoLegal'])->name('avisoLegal');
Route::get('/politicaCookies', [ViewController::class, 'politicaCookies'])->name('politicaCookies');
Route::get('/condicionesVenta', [ViewController::class, 'condicionesVenta'])->name('condicionesVenta');
Route::get('/login', [ViewController::class, 'login'])->name('login');

//Inicio de sesión y registro
Route::post('login', [LoginController::class, 'loginComprobar'])->name('login.comprobar');
Route::get('registro', [LoginController::class, 'registro'])->name('registro');
Route::post('registro', [LoginController::class, 'registroGrabar'])->name('registro.grabar');
Route::get('salir', [LoginController::class, 'salir'])->name('salir');

//Google
Route::get('auth/google', [GoogleController::class, 'signInwithGoogle']);
Route::get('callback/google', [GoogleController::class, 'callbackToGoogle']);

//Ruta para mostrar el formulario de contacto y procesar los datos
Route::get('/contacto', [ContactoController::class, 'show'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'process'])->name('contacto.process');

//Pago
Route::get('/subscribe/{plan_id}', [SubscriptionController::class, 'subscribe'])->name('subscribe');
