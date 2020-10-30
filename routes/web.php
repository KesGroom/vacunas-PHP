<?php

use App\Http\Controllers\CorreoController;
use App\Http\Controllers\EpsController;
use App\Http\Controllers\OfficialController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\UsuController;
use App\Http\Controllers\VaccineController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->name('/');
//mostrar las vacunas 
Route::get('vaccines/index',[VaccineController::class, 'index'])->name('vaccines.index');
//mostrar los usuarios 
Route::get('Users/index',[UserController::class, 'index'])->name('users.index');
//Formulario de users
Route::get('Users/{user}/edit',[UserController::class, 'edit'])->name('users.edit');
//Formulario de users
Route::get('Users/{user}/edit',[UserController::class, 'edit'])->name('users.edit');
//actualizacion de users
Route::put('Users/{user}',[UserController::class,'update'])->name('users.update');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Ruta para personas
Route::get('Eps/crear',[OfficialController::class, 'crear'])->name('Eps.crear');
Route::get('Eps/mostrar',[OfficialController::class, 'mostrar'])->name('Eps.mostrar');
Route::get('emails/correo',[CorreoController::class, 'send'])->name('emails.correo');
Route::get('User/index2',[EpsController::class, 'create'])->name('User.index2');
Route::get('Persons/create',[PersonController::class, 'registro'])->name('Persons.create');
Route::get('Persons/vacunas',[PersonController::class, 'create'])->name('Persons.vacunas');
Route::get('User/index',[VaccineController::class, 'create'])->name('User.index');
Route::get('Persons/index',[PersonController::class, 'index'])->name('Persons.index');
Route::get('Persons/carnet',[PersonController::class, 'carnet'])->name('Persons.carnet');
Route::post('Persons',[PersonController::class, 'store'])->name('Persons.store');
Route::post('official',[OfficialController::class, 'usu'])->name('official.usu');
Route::post('Eps',[EpsController::class, 'store'])->name('Eps.store');
Route::get('User',[VaccineController::class, 'index'])->name('User.index');
Route::post('correo',[CorreoController::class, 'enviar2'])->name('correo.enviar2');
