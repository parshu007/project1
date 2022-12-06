<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
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

Route::get('/', [HomeController::class, 'method']);
Route::get('/about', [HomeController::class, 'about']);
//Route::get('/about', [AboutController::class, 'method']);

Route::get('/test/{num}/{two?}', function ($num,$two) {
    $data=compact('num','two');
    return view('test')->with($data);
});
