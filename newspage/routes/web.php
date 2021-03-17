<?php

    use App\Http\Controllers\SendEmailController;
    use Illuminate\Support\Facades\Auth;
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

Route::resource('/binnenland', \App\Http\Controllers\BinnenlandController::class);

Route::get('/', function () {
    return view('home.welcome');
});

Route::get('/about', function () {
    return view('home.about');
});


Route::get('/contact', '\App\Http\Controllers\SendEmailController@index');
Route::post('/contact/send', '\App\Http\Controllers\SendEmailController@send')->name('contact.send');

Route::get('/login', function () {
    redirect(\route('login'));
});

Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

