<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/storage/{fileName}', [FileController::class, 'fileStorageServe'])
    ->where(['fileName' => '.*'])->name('storage.gallery.file');

Route::get('/{pathMath}', function () {
    return view('welcome');
})->where('pathMath',".*");