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
    if(\Illuminate\Support\Facades\Auth::check()){
        return redirect('home');
    }
    return redirect('welcome');
});

Auth::routes();

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::middleware(['auth'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    // developers  passport
    Route::get('/settings/developer/passport', function () {
        return view('settings.developer.passport');
    });

    // profile
    Route::get('/settings/profile', 'User\UserController@profile');

});


// for test
Route::get('/test', function () {
    return view('test');
});


