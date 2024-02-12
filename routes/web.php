<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/',[TaskController::class, 'index']) -> name('index');
Route::post('/', [TaskController::class, 'store']) -> name('store');
Route::post('/complete{tasklist}', [TaskController::class, 'complete']) -> name('complete');
Route::delete('{todolist:id}', [TaskController::class, 'delete']) -> name('delete');
