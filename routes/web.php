<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
<<<<<<< HEAD
use App\Http\Controllers\UserController;

=======
>>>>>>> 0d568f69da9c15202b240aeeb9206a3c575e6100

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('students', StudentController::class);
<<<<<<< HEAD

Route::resource('users', UserController::class);

Route::get('/search', [StudentController::class, 'search'])->name('search');


=======
>>>>>>> 0d568f69da9c15202b240aeeb9206a3c575e6100
