<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
})->name('welcome');
Route::middleware('admin.check')->controller(UserController::class)->prefix('users')->group(function () {
    Route::get('', 'index');
    Route::post('', 'store');
    Route::get('/create', 'create');
    Route::get('/{user}', 'show');
    Route::put('/{user}', 'update');
    Route::delete('/{user}', 'destroy');
    Route::get('/{user}/edit', 'edit');
});
Route::resources([
    'posts' => PostController::class,
]);
