<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PlaygroundController;
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

// Route::get('/playground', function () {
//     Mapper::map(50.964499, 5.409432);
//     return view('playground');
// });

Route::get('/home', function () {
    Mapper::map(50.964499, 5.409432);
    $companies = App\Models\Company::get();
    $prices = App\Models\Price::get();
    $sizes = App\Models\Size::get();
    return view('home', compact('companies','prices','sizes'));
});

Route::get('/addplayground', function () {
    Mapper::map(50.964499, 5.409432);
    return view('addplayground');
});

Route::get('/favorites', function () {
    Mapper::map(50.964499, 5.409432);
    return view('favorites');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/addPg', 'App\Http\Controllers\CompanyController@store');

Route::get('/playground/{id}','App\Http\Controllers\CompanyController@detail');

