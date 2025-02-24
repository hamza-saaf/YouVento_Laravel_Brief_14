<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClubController;


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

Route::get('/home', function () {
    return  view('home');
});
Route::get('/app', function () {
    return view('layouts/app');
});

Route::get('/clubs', [ClubController::class, 'index'])->name('admin.clubs');
Route::get('/clubs/create', [ClubController::class, 'create'])->name('admin.clubs.create');
Route::post('/clubs', [ClubController::class, 'store'])->name('admin.clubs.store');
Route::get('/clubs/{club}/edit', [ClubController::class, 'edit'])->name('admin.clubs.edit');
Route::put('/clubs/{club}', [ClubController::class, 'update'])->name('admin.clubs.update');
Route::delete('/clubs/{club}', [ClubController::class, 'destroy'])->name('admin.clubs.destroy');
Route::put('clubs/{club}/archive', [ClubController::class, 'archive'])->name('clubs.archive');

// Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
//     Route::resource('clubs', ClubController::class);
//     Route::put('clubs/{club}/archive', [ClubController::class, 'archive'])->name('admin.clubs.archive');
// });
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/clubs', [ClubController::class, 'index'])->name('admin.clubs.index');
// });