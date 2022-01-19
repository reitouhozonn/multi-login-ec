<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\User\ItemController;
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
    return view('user.welcome');
});

Route::middleware('auth:users')
    ->group(function () {
        Route::get('/', [ItemController::class, 'index'])
            ->name('items.index');
        Route::get('show/{item}', [ItemController::class, 'show'])
            ->name('items.show');
    });

Route::prefix('cart')->middleware('auth:users')
    ->group(function () {
        Route::post('add', [CartController::class, 'add'])->name('cart.add');
    });


require __DIR__ . '/auth.php';
