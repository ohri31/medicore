
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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/subscribe', 'SubscribeController@index');
Route::post('/subscribe', 'SubscribeController@store');
Route::get('/frameplugin', 'DonationsController@frame');
Route::post('/frameplugin', 'DonationsController@store_frame');
Route::get('/frameplugin/success', 'DonationsController@success');
Route::get('/halloffame', 'SupportController@index');

Route::resource('donations', 'DonationsController');
