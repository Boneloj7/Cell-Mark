<?php

use Illuminate\Support\Facades\Route;

// Página principal
Route::get('/', function () {
    return view('index');
})->name('home');

// Accesorios
Route::get('/accesorios', function () {
    return view('accesorio');
})->name('accesorios');

// Buscador/Explorar todo
Route::get('/explorar', function () {
    return view('buscador');
})->name('explorar');

// Inicio de sesión
Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

// Rutas adicionales (agregar según necesites)
Route::get('/servicio-tecnico', function () {
    // Aquí puedes agregar lógica de verificación de sesión si es necesario
    return view('servicio-tecnico');
})->name('servicio-tecnico');

Route::get('/vender', function () {
    // Aquí puedes agregar lógica de verificación de sesión si es necesario
    return view('vender');
})->name('vender');