<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[CategoryController::class,'welcome']);
Route::post('adddata',[CategoryController::class,'adddata']);
Route::get('showdata',[CategoryController::class,'showdata'])->name('showdata');
Route::get('edit/{id}',[CategoryController::class,'edit']);
ROute::post('updatedata/{id}',[CategoryController::class,'update']);
Route::delete('deletedata/{id}', [CategoryController::class, 'delete'])->name('category.delete');