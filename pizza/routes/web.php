<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('pizza.home');

Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizza.index')->middleware('auth');
Route::get('/pizzas/create',[PizzaController::class, 'create'])->name('pizza.create');
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizza.show')->middleware('auth');
Route::post('/pizzas',[PizzaController::class, 'store'])->name('pizza.store');
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->name('pizza.destroy')->middleware('auth');


Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
