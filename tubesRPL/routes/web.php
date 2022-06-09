<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\DocController;
use App\Http\Controllers\RsController;



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
/*
Route::get('/', function () {
    return view('welcome');
});*/


// PARENT
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [AuthController::class,"loginView"]);
Route::get('/register', [AuthController::class,"registerView"]);
Route::post('/do-login', [AuthController::class,"doLogin"]);
Route::post('/do-register', [AuthController::class,"doRegister"]);
Route::get('/logout', [AuthController::class,"logout"]);
Route::get('/login1', [AuthController::class,"loginView1"]);
Route::get('/parentView', [AuthController::class,"parentView"]);
Route::get('/parentView/addDataBayi', [AuthController::class,"addDataBayi"]);
Route::get('/forumView', [AuthController::class,"forumView"]);
Route::get('/articleView', [AuthController::class,"articleView"]);
Route::get('/hospitalView', [AuthController::class,"hospitalView"]);
Route::get('/hospitalView/listDokter', [AuthController::class,"listDokView"]);
Route::get('/notesView', [AuthController::class,"notesView"]);
Route::get('/ortuProfView', [AuthController::class,"ortuProfView"]);



// DOCTOR 

Route::get('/docProfView', [DocController::class,"profView"]);
Route::get('/homeDoc', [DocController::class,"index"]);
Route::get('/settingDoc', [DocController::class,"setView"]);
Route::get('/editProfDoc', [DocController::class,"editProf"]);
Route::get('/articleDoc', [DocController::class,"articleDoc"]);
//Route::get('/docProfView', [DocController::class,"profView"]);

// RUMAH SAKIT
Route::get('/editProfRS', [RsController::class,"editProfRS"]);
Route::get('/profRS', [RsController::class,"profRS"]);

