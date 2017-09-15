<?php

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


Route::get('/return_Json_Data', function () {

    $countries = App\Countries::get();
    return Response::Json($countries);

});

Route::get('/return_Json_Data_With_Filters_page', function () {
    return view('filter');
});


Route::pattern('IN','[A-Za-z]+');
Route::get('/return_Json_Data_With_Filters_page/{IN?}', function ($IN = null) {
       $iso2countries = App\Countries::where('iso2', '=', $IN)->first();
       return Response::Json($iso2countries);
});
