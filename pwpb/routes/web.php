<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/cv', function () {
//     return view('cv');
// });

// Route::get('/cv', [siswaController::class, 'index']);

// Route::resource('siswa', SiswaController::class);

Route::get('/siswa/create', function () {
    return view('project_alpha/siswa_create');
});

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

Route::post('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');

Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');

Route::put('/siswa/edit/{id}', [SiswaController::class, 'update'])->name('siswa.update');

Route::delete('/siswa/delete/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');

// Route::get('/profile', function () {
//     return view('profile_pplg');
// });