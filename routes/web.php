<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
// use App\Http\Controllers\AuthController;


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


Route::get('/', [HomeController::class, 'index']);
Route::get('/registre', [HomeController::class, 'registre']);
Route::get('/login', [HomeController::class, 'login']);


Route::get('/Allposts', [PostController::class, 'index']);
Route::get('/Allposts', [PostController::class, 'create']);
Route::get('/onePost', [PostController::class, 'createpost']);


Route::get('/About', [PostController::class, 'about']);




Route::get('/Onepost/{id}', [PostController::class, 'show']);






















// Route::get('dashboard', [AuthController::class, 'dashboard']); 

// Route::get('registration', [AuthController::class, 'register'])->name('register');
// Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
// Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
// Route::post('login', [AuthController::class, 'Login'])->name('login'); 