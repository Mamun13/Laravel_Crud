<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/user/login', [AdminController::class,'login'])->name('user.login');
Route::get('/user/register', [AdminController::class,'register'])->name('user.register');
Route::get('/user/create', [AdminController::class,'create'])->name('user.create');
Route::post('/user/register/store', [AdminController::class,'store'])->name('user.register.store');
Route::get('/user/show', [AdminController::class,'show'])->name('user.show');
Route::get('/user/edit/{id}', [AdminController::class,'edit'])->name('user.edit');
Route::post('/user/update/{id}', [AdminController::class,'update'])->name('user.update');
Route::delete('/user/destroy/{id}', [AdminController::class,'destroy'])->name('user.destroy');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
