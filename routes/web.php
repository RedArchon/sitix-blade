<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Http;
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

Route::get('/page-1', function () {
    return view('page-1');
});

Route::get('/page-2', [PageController::class, 'index'])->name('page2.index');
Route::get('/page-3', [PageController::class, 'page3'])->name('page3.index');
Route::get('/page-4', [PageController::class, 'page4'])->name('page4.index');
Route::get('/page-2/get-data', [PageController::class, 'getData'])->name('page2.get-data');

