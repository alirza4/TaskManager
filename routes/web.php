<?php

use App\Http\Controllers\Auth\AuthController;
//use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


//Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
//Route::post('/login', [AuthController::class, 'login']);
//Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
//
//Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
//Route::post('/register', [AuthController::class, 'register']);

//Route::get('/', [TaskController::class, 'index'])->name('index');
//Route::resource('task', TaskController::class);


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
Route::get('/home', [TaskController::class, 'index'])->name('index');
Route::resource('task', TaskController::class);

Route::get('/', function () {
    return view('home');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
