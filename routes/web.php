<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users.index');
})->name('home');

Route::controller(RegisterController::class)->group(function (){
    Route::get('/register','index')->name('register');
    Route::post('/register','store');
});

Route::controller(LoginController::class)->group(function (){
    Route::get('/login','index')->name('login');
    Route::post('/login','store');
});

Route::resource('users',UserController::class);
Route::resource('departments',DepartmentController::class);


/*Route::controller(DepartmentController::class)->group(function (){
    Route::get('/departments','index')->name('departments');
    Route::get('/departments/create','create')->name('departments.create');
    Route::post('/departments/create','store');
    Route::get('/departments/{department}/update','update')->name('departments.create');
    Route::post('/departments/create','store');
});*/
