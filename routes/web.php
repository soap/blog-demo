<?php

use App\Http\Controllers\PostController;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function() {
    Route::get('/posts', [PostController::class, 'index'])
        ->name('posts.index');
    Route::get('/posts/{post}/delete', [PostController::class, 'destroy'])
        ->name('posts.delete');    
});

require __DIR__.'/auth.php';
