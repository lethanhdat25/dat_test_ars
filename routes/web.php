<?php

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
Route::get("/api-airport",[\App\Http\Controllers\DataSqlController::class,"getData"]);
Route::get("/airport",[\App\Http\Controllers\DataSqlController::class,'all']);
Route::get('/airport/edit/{id}',[\App\Http\Controllers\DataSqlController::class,'edit']);
Route::post('/airport/update/{id}',[\App\Http\Controllers\DataSqlController::class,'update']);
Route::get('/airport/cancel',function (){
    return redirect()->to('airport');
});
Route::get('/airport/delete/{id}',[\App\Http\Controllers\DataSqlController::class,'delete']);
Route::post('/airport/save',[\App\Http\Controllers\DataSqlController::class,'save']);

