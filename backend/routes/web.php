<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PlaygroundController;
use App\Models\Company;
use Illuminate\Http\Request;
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

// standaard route gives login page
Route::get('/', function () {
    return view('login');
});
// route to homepage, map information for showing playgrounds compact companies for list of playgrounds
Route::get('/home', function () {
    Mapper::map(50.964499, 5.409432, ['eventClick' => 'console.log("left click");']);
    $companies = App\Models\Company::get();
    $prices = App\Models\Price::get();
    $sizes = App\Models\Size::get();
    $mapArrays = Company::where('long','!=',NULL)->get();
    // shows marker for each playground in the database
    foreach ($mapArrays as $mapArray) {
        //dd($mapArray->long);
        Mapper::marker($mapArray->long, $mapArray->lat,[
            'label'     => [
                'text' => $mapArray->namePlayground,
                'color' => '#B9B9B9',
                'fontFamily' => 'Arial',
                'fontSize' => '13px',
                'fontWeight' => 'bold',
            ],
        ]);}
    // counts number of slected playgrounds in the database
    $countCompany = Company::all()->count();
    return view('home', compact('companies','prices','sizes','countCompany'));
});
// Shows add playground blade, including a map with current location
Route::get('/addplayground', function () {
    Mapper::map(0, 0, ['locate' => true]);
    return view('addplayground');
    
});
// shows favorites blade and a map, connection with user to be implemented later
Route::get('/favorites', function () {
    Mapper::map(50.964499, 5.409432);
    return view('favorites');
});
// shows blade with contact form
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/sendmail', function (Request $request) {
    $email = $request->email;
    $message = $request->message;
    $details = [
        'title' => ('New email from: ' . $request->email),
        'body' => $request->message
    ];
    \Mail::to('mighty@ducks.quack')->send(new \App\Mail\sendMail($details));
    toast('Email verstuurd!','success')->autoClose(5000)->position('middle');
    return view('contact');
});

// stores the new playground in the database
Route::post('/addPg', 'App\Http\Controllers\CompanyController@store');

// show playground with specific id on the playground blade
Route::get('/playground/{id}','App\Http\Controllers\CompanyController@detail');

// go to voyager login page
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
