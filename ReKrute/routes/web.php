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
Route::get('/emploi', function () {
    return view('recruteur/emploi')->with('emplois',emploi::all());
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/postuler',  [App\Http\Controllers\PostulerController::class, 'postuler'] );
Route::get('/showPostuler',  [App\Http\Controllers\PostulerController::class, 'show'] );
Route::get('/deletePostuler/{id}',  [App\Http\Controllers\PostulerController::class, 'deletePostuler'] );
Route::get('/home.stages', [App\Http\Controllers\StageController::class, 'index'])->name('stages');
Route::get('/home.profil', [App\Http\Controllers\UserController::class, 'index'])->name('profil');
Route::get('update_profil/{id}', 'App\Http\Controllers\UserController@update' );
Route::get('edit/{id}', 'App\Http\Controllers\UserController@edit' );
Route::get('/home.mesoffres', [App\Http\Controllers\EmploiController::class, 'indexs'])->name('mesoffres');
Route::post('/home/addProject',[EmploiController::class, 'create']);

Route::get('update_emploi/{id}', 'App\Http\Controllers\EmploiController@update' );

Route::get('edit/{id}', 'App\Http\Controllers\EmploiController@edit' );

Route::get('delete/{id}', 'App\Http\Controllers\EmploiController@destroy' );


