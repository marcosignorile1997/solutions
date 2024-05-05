<?php

use Illuminate\Support\Facades\Route;
//mettere
use App\Http\Controllers\HomepageController;
//usare 



Route::get('/',[HomepageController::class,'homepage'])->name('homepage');
Route::post('/salva', [HomepageController::class, 'homepage_store'])->name('homepage_store');
Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');