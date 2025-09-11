<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
Route::get('/', [TestController::class, 'index']);
Route::get('/confirm', [TestController::class, 'confirm']);
Route::get('/thanks', [TestController::class, 'thanks']);
Route::get('/admin', [TestController::class, 'admin']);
Route::get('/register', [TestController::class, 'register']);
Route::get('/login', [TestController::class, 'login']);

