<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
use App\Mail\MessageEmail; //template do email

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
//     return view('welcome');
// });


Route::get('/', [EmailController::class, 'formulario'] )->name('formulario');
Route::post('/conclusao', [EmailController::class, 'enviar'])->name('conclusao.enviar');
