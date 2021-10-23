<?php

use App\Http\Livewire\Crews\CrewsIndex;
use App\Http\Livewire\Crews\CrewsEdit;
use App\Http\Livewire\Ships\ShipsIndex;
use App\Http\Livewire\Ships\ShipsCreate;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/routes', function () {
    return view('routes');
})->name('routes');

Route::middleware(['auth:sanctum', 'verified'])->get('/crews', function () {
    return view('crews');
})->name('crews');

Route::middleware(['auth:sanctum', 'verified'])->get('/ships', function () {
    return view('ships');
})->name('ships');

// Route::get('/crews', CrewsIndex::class)->name('crews.index');
// Route::get('/crews/{id}/edit', CrewsEdit::class)->name('crews.edit');

// Route::get('/ships', ShipsIndex::class)->name('ships.index');
// Route::get('/ships/create', ShipsCreate::class)->name('ships.create');
