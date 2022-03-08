<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
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

// Route::get('/fr', function () {
//     return view('bienvenu');
// });

// Route::get('/it', function () {
//     return view('benvenuto');
// });

Route::get('/', [HomeController::class,  'goHome']);

Route::get('/product', [ProductController::class,  'goListe']
);

Route::get('/product/{id}', [ProductController::class,  'goProductInfo']
// function () {
//     return view('ProductController');
// }
);
Route::get('/card', [CartController::class,  'goCard']
// function () {
//     return view('CartController');
// }
);