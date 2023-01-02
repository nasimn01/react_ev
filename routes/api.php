<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HeaderController as head;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/header',[head::class,'header']);
Route::post('register', [head::class, 'save']);
// Route::get('/preport',[report::class,'preport']);
// Route::get('/sreport',[report::class,'stockreport']);
// Route::get('/salreport',[report::class,'salesReport']);