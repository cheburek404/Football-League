<?php

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
    return view('home');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');


Route::get('/admin/club/add', [\App\Http\Controllers\ClubController::class, 'index'])->name('addClub');
Route::post('/admin/club/add', [\App\Http\Controllers\ClubController::class, 'save'])->name('save');


Route::get('/admin/match', [\App\Http\Controllers\MatchController::class, 'index'])->name('showMatch');
Route::get('/admin/match/add', [\App\Http\Controllers\MatchController::class, 'addMatch'])->name('addMatch');