<?php

use Core\Facades\Route;
use App\Http\Controllers\WelcomeController;

// Página de bienvenida inicial del framework con controlador
Route::get('/', [WelcomeController::class, 'index'])->name('home');

?>
