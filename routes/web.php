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

Route::group(['middleware' => ['auth']], function () {
    Route::get('item/create', [ItemController::class, 'create'])->name('items.create.get');
    Route::post('item/create', [ItemController::class, 'store'])->name('items.create.post');

    Route::get('item/{item:slug}', [ItemController::class, 'show'])->name('items.show');

    Route::get('item/{item:slug}/edit', [ItemController::class, 'edit'])->name('items.edit.get');
    Route::patch('item/{item:slug}/edit', [ItemController::class, 'update'])->name('items.edit.post');

    Route::delete('item/{item:slug}/delete', [ItemController::class, 'destroy'])->name('items.delete');
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
