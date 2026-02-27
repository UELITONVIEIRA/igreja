<?php

use App\Http\Controllers\PrayerRequestController;
use App\Http\Controllers\SermonController;
use App\Models\Sermon;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

// Páginas públicas
Route::get('/', function () {
    $latestSermons = Sermon::latestPreached()->take(3)->get();

    return Inertia::render('Home', [
        'canRegister' => Features::enabled(Features::registration()),
        'latestSermons' => $latestSermons,
    ]);
})->name('home');

Route::inertia('/sobre', 'Sobre')->name('sobre');
Route::inertia('/conectar', 'Conectar')->name('conectar');
Route::inertia('/contribua', 'Contribua')->name('contribua');

Route::get('/sermoes', [SermonController::class, 'index'])->name('sermoes');

Route::inertia('/oracao', 'Oracao')->name('oracao');
Route::post('/oracao', [PrayerRequestController::class, 'store'])->name('oracao.store');

// Área autenticada
Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
