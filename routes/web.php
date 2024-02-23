<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\POSController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [POSController::class, 'home']);
Route::get('/products', [POSController::class, 'products']);
Route::get('/category/{category}', [POSController::class, 'productsByCategory']);
Route::get('/user/{id}/name/{name}', [POSController::class, 'user']);
Route::get('/sales', [POSController::class, 'sales']);
Route::post('/process-sale', [POSController::class, 'processSale'])->name('process.sale');

