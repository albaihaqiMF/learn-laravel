<?php

use App\Http\Controllers\ItemController;
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

Route::get('/', [ItemController::class, 'index'])->name('items.index');

Route::get('item/create', [ItemController::class, 'create'])->middleware('auth')->name('items.create.get');
Route::post('item/create', [ItemController::class, 'store'])->middleware('auth')->name('items.create.post');

Route::get('item/{item:slug}', [ItemController::class, 'show'])->name('items.show');

Route::get('item/{item:slug}/edit', [ItemController::class, 'edit'])->middleware('auth')->name('items.edit.get');
Route::patch('item/{item:slug}/edit', [ItemController::class, 'update'])->middleware('auth')->name('items.edit.post');

Route::delete('item/{item:slug}/delete', [ItemController::class, 'destroy'])->middleware('auth')->name('items.delete');

Route::view('/about', 'about');
Route::view('/contact', 'contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
