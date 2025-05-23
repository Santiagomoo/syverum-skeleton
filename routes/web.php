<?php

use Core\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/servicios',[HomeController::class,'service'])->name('service');
Route::get('/acercade',[HomeController::class,'about'])->name('about');

?>