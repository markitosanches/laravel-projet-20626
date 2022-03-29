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

// Route::get('/', function () {
//     return view('home');
// });

use App\Http\Controllers\TestController;

Route::get('/test-abc', [TestController::class, 'index']);

use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'index']);
Route::get('/about', [BlogController::class, 'about']);
Route::get('/sample', [BlogController::class, 'sample']);
Route::get('/contact', [BlogController::class, 'contact']);


