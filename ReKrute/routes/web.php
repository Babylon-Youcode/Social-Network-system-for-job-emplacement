<?php
use App\Http\Controllers\EmploiController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;
use App\Models\emploi;
use App\Models\stage;
use App\Models\User;

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
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/home', 'App\Http\Controllers\EmploiController@index' );
Route::get('/home.stages', [App\Http\Controllers\StageController::class, 'index'])->name('stages');
Route::get('/home.profil', [App\Http\Controllers\UserController::class, 'index'])->name('profil');


