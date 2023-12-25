<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {

    return view('auth.login');
});



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/user/{id}', [ProfileController::class, 'view'])->name('user.profile.view');
Route::get('/user_two/{id}', [ProfileController::class, 'view_two'])->name('user.profile.view_two');
Route::get('/user_three/{id}', [ProfileController::class, 'view_three'])->name('user.profile.view_three');
Route::get('/user_four/{id}', [ProfileController::class, 'view_four'])->name('user.profile.view_four');

Route::group(['middleware' => ['auth']], function () {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/my-profile', [ProfileController::class, 'index'])->name('index');

    Route::get('/create', [ProfileController::class, 'create'])->name('user.profile.create');
    Route::post('/store', [ProfileController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ProfileController::class, 'edit'])->name('edit');
    Route::post('/update', [ProfileController::class, 'update'])->name('update');
    Route::post('/destroy/{id}', [ProfileController::class, 'destroy'])->name('destroy');

});