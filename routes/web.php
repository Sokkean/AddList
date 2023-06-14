<?php

use App\Http\Controllers\addListController;
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
    return view('button1');
});

// rount crud
Route::get("list",[addListController::class,'index']);
Route::get("add/list",[addListController::class,'create']);
Route::post("save/list",[addListController::class,'store']);
Route::get("edit/list/{id}",[addListController::class,'edit']);
Route::post("update/list",[addListController::class,'update']);
Route::get("delete/list/{id}",[addListController::class,'destroy']);





// Route::get("btn",[buttonController::class],'')
