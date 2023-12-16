<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\OrderController;
use App\Http\Controllers\DataPendudukController;


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

// Route::get('/fromPenduduk',[DataPendudukController::class,'showFormPenduduk'])->name('show-data');
// Route::post('/dashboardPenduduk',[DataPendudukController::class,'submitData'])->name('submit-data');
// Route::get('/', function () {
//     // return view('welcome');
//     return redirect()->route('show-data');
// });


Route::get('/pesan', [
    DataPendudukController::class,
    'showFormPenduduk'
])->name('show-form-penduduk');

Route::post('/submit-data', [
    DataPendudukController::class,
    'submitData'
])->name('submit-data');

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('show-form-penduduk');
});


