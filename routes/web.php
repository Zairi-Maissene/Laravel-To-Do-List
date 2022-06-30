<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;

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

Route::get(
    '/',
    [ToDoController::class, 'index']
);
Route::post('/save', [ToDoController::class, 'save'])->name('saveItem');
Route::get('/delete/{id}', [ToDoController::class, 'delete'])->name('deleteItem');
