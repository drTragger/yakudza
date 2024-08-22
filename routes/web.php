<?php

use App\Http\Controllers\FormController;
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
    return view('pages.index');
})->name('index');

Route::get('/finish', function () {
    return view('pages.finish');
})->name('finish');

Route::middleware('web')->post('/form', [FormController::class, 'submit'])
    ->middleware('throttle:3,1')
    ->name('form.submit');
