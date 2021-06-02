<?php

use Illuminate\Support\Facades\Route;
use App\Models\Company;
use App\Models\Price;
use App\Models\Size;
use App\Models\Favorite;

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
    return view('login');
});

Route::get('/playground', function () {
    return view('playground');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/addplayground', function () {
    return view('addplayground');
});

Route::get('/favorites', function () {
    return view('favorites');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/addPg', 'App\Http\Controllers\CompanyController@store');