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

Route::get('/contact', 'App\Http\Controllers\ContactController@create')->name('contact');
Route::post('/store', 'App\Http\Controllers\ContactController@store')->name('store_contact');
Route::get('/contacts/exportcsv', 'App\Http\Controllers\ContactController@exportCSV')->name('exportcsv');

Route::get('/confirm', function () {
    return view('confirm');
})->name('contact-confirm');

require __DIR__.'/auth.php';
