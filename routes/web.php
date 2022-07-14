<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\T_FoodController;
use App\Http\Requests\T_Food;

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
Route::get('/food', [T_FoodController::class,'index']);
Route::get('/addfood', [T_FoodController::class,'addForm']);
Route::post('/addfood', [T_FoodController::class,'postAdd'])->name('add-food');
Route::get('/category', [T_FoodController::class,'getCategory']);
Route::get('/detail/{id}',[T_FoodController::class, 'getDetail']);
Route::get('/type/{id}',[T_FoodController::class, 'Category']);