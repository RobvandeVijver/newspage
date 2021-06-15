<?php

    use App\Http\Controllers\BinnenlandController;
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

Route::resource('/binnenland', BinnenlandController::class);

Route::resource('/economie', \App\Http\Controllers\EconomieController::class);

Route::resource('/sport', \App\Http\Controllers\SportController::class);

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/about', function () {
    return view('home.about');
});


Route::get('/contact', '\App\Http\Controllers\SendEmailController@index')->middleware('auth');
Route::post('/contact/send', '\App\Http\Controllers\SendEmailController@send')->name('contact.send');

Route::get('/login', function () {
    redirect(\route('login'));
});

Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
