<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BlogController;

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

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::post('/new-student',[StudentController::class, 'create'])->name('new-student');
Route::post('/add-student',[BlogController::class, 'create1'])->name('blog');
Route::get('/add-blog',[BlogController::class, 'index'])->name('add-blog');
//show data for student table
Route::get('/manage-student',[StudentController::class, 'manage'])->name('manage-student');
Route::get('/edit-student/{id}',[StudentController::class, 'edit'])->name('edit-student');
Route::post('/update-student/{id}',[StudentController::class, 'update'])->name('update-student');
//Route::get('/delete-student/{id}',[StudentController::class, 'delete'])->name('delete-student');
Route::post('/delete-student/{id}',[StudentController::class, 'delete'])->name('delete-student');
//show data for blog table
Route::get('/manage-blog',[BlogController::class, 'manage'])->name('manage-blog');
Route::get('/edit-blog/{id}',[BlogController::class, 'edit'])->name('edit-blog');

