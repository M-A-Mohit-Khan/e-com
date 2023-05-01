<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TokenController;

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

Route::get('/', function () {
    return view('product');
});

Route::get('/details', [DetailsController::class, 'index']);
Route::post('/store-details', [DetailsController::class, 'store']);

Route::get('/send-mail', [MailController::class, 'index']);
Route::get('/token', [TokenController::class, 'index']);
Route::post('/verify-token', [TokenController::class, 'store']);

// Route::get('/send-mail', [MailController::class, 'index']);

// Route::get('/details', function () {
//     return view('details');
// });
