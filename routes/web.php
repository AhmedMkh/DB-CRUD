<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
Route::get('/',[TaskController::class,'index'])->name('task.index');

Route::get('/about', function () {
    $name= 'AAA' ;

    return view('about', compact('name'));
});

Route::get('/task/{id}',[TaskController::class,'show'])->name('task.show');
Route::post('/task/store',[TaskController::class,'store'])->name('task.store');
Route::delete('/task/destroy/{id}',[TaskController::class , 'destroy'])->name('task.destroy');
Route::get('/task/update/{id}',[TaskController::class , 'update'])->name('task.update');
Route::post('/task/update/{id}',[TaskController::class , 'update'])->name('task.update');
Route::get('/task/edit/{id}',[TaskController::class , 'edit']) -> name('task.edit');
Route::put('/task/edit/{id}',[TaskController::class , 'edit']) -> name('task.edit');
