<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/',[HomeController::class ,'index']);

Route::get('/redirects',[HomeController::class ,'redirects']);
Route::get('/users',[AdminController::class ,'user']);
Route::get('/deleteuser/{id}',[AdminController::class ,'deleteuser']);
Route::get('/foodmenu',[AdminController::class ,'foodmenu']);
Route::post('/uploadfood',[AdminController::class ,'uploadfood']);
Route::get('/deletefood/{id}',[AdminController::class ,'deletefood']);
Route::get('/updatefood/{id}',[AdminController::class ,'updatefood']);
Route::post('/updatefoodmenu/{id}',[AdminController::class ,'updatefoodmenu']);
Route::post('/reservation',[AdminController::class ,'reservation']);
Route::get('/viewreservation',[AdminController::class ,'viewreservation']);

Route::get('/viewchief',[AdminController::class ,'viewchief']);
Route::post('/uploadchief',[AdminController::class ,'uploadchief']);

Route::get('/updatechief/{id}',[AdminController::class ,'updatechief']);
Route::post('/updatefoodchief/{id}',[AdminController::class ,'updatefoodchief']);
Route::get('/deletechief/{id}',[AdminController::class ,'deletechief']);