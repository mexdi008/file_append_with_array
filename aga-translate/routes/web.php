<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgaTranslateController;
use App\Http\Controllers\AppendController;
use App\Http\Controllers\PrependController;

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

 Route::get('/', [AgaTranslateController::class, 'index']);

 Route::get('/fileprepend', function () {
    return view('file_prepend');
 });