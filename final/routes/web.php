<?php

use App\Http\Controllers\CarController;
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

Route::get('/', [CarController::class, 'index'])->name("index");
Route::get('/edit-delete', [CarController::class, 'edit_delete_view'])->name("edit_delete_view");

Route::get('/add', [CarController::class, 'add'])->name("add");
Route::post('/add', [CarController::class, 'add'])->name("add");

Route::get('/edit', [CarController::class, 'edit'])->name("edit");
Route::post('/edit', [CarController::class, 'edit'])->name("edit");

Route::post('/delete', [CarController::class, 'delete'])->name("delete");
