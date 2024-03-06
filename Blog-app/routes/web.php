<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class , 'IndexAction'])->name('home');

Route::get('/Post/index', [PostController::class , 'Index'])->name('post');

Route::get('/Post/create', [PostController::class , 'create'])->name('create');

Route::get('/Post/{post}' , [PostController::class , 'show']) ->name('show');

Route::post('/Post',[PostController::class , 'store'])-> name('store');

Route::get('/Post/edit/{post}', [PostController::class, 'edit'])->name('edit');

Route::patch('/Post/{post}', [PostController::class, 'update'])->name('update');

Route::get('/Post/delete/{post}', [PostController::class, 'delete'])->name('delete');









