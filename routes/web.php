<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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

Route::resources(
    [
        'users' => UserController::class,
        'posts' => PostController::class,
    ],
    [
        'middleware' => 'auth',
    ]
);

Route::get('/', function () {
    return view('welcome');
});
require __DIR__ . '/auth.php';
Route::get('language/{lang}', [LanguageController::class, 'changeLanguage'])->name('language');
