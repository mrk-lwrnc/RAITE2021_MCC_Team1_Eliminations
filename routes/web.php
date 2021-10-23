<?php

use App\Http\Livewire\Crews\CrewsIndex;
use App\Http\Livewire\Crews\CrewsEdit;
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

Route::get('/crews', CrewsIndex::class)->name('crews.index');
Route::get('/crews/{id}/edit', CrewsEdit::class)->name('crews.edit');
