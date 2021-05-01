<?php

use App\Http\Controllers\ItemController;
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

Route::get('/', [ItemController::class,'index']);

Route::get('item/create',[ItemController::class,'create']);
Route::post('item/create',[ItemController::class,'store']);

Route::get('item/{item:slug}',[ItemController::class,'show']);

Route::get('item/{item:slug}/edit',[ItemController::class,'edit']);
Route::patch('item/{item:slug}/edit',[ItemController::class,'update']);

Route::delete('item/{item:slug}/delete',[ItemController::class,'destroy']);

Route::view('/about','about');
Route::view('/contact','contact');
