<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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
    return redirect()->route('homepage');
});
Route::get('/home',  function (){
    return view('home');
})->name('homepage');
Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);