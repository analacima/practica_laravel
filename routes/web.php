<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::resource("alumnos",AlumnoController::class)
    ->middleware('auth'); // si al entrar en alumnos no está autenticado, nos lleva a login
// el método resource crea los entrypoint para resolver la solicitud de un recurso



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::view("about", "about")->name("about");
Route::view("noticias", "noticias")->name("noticias");
Route::view("contacto", "contacto")->name("contacto");



require __DIR__.'/auth.php';
