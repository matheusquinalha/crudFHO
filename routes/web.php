<?php

use App\Http\Controllers\CRUD;
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

Route::get('/crud', [CRUD::class,'index']);
Route::get('/front-end/src/App.vue', [CRUD::class,'index']);
Route::get('/crud/create', [CRUD::class,'create']);
Route::post('/crud/submit', [CRUD::class,'store']);
Route::get('/crud/delete/{id}', [CRUD::class,'delete']);
Route::get('/crud/alter/{id}', [CRUD::class,'alter']);
Route::get('/crud/update/{id}', [CRUD::class,'update']);