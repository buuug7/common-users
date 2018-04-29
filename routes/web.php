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
    return redirect('home');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

    // developers  passport
    Route::get('/settings/developer/passport', function () {
        return view('settings.developer.passport');
    });

});


// for test
Route::get('/test', function () {
    return view('test');
});

Route::post('/test-upload', function (\Illuminate\Http\Request $request) {

    $croppedImage = $request->file('croppedImage');

    $link = Storage::disk('public')->put('avatars', $croppedImage);

    $url = asset('storage/' . $link);

    return json_encode([
        'url' => $url,
    ]);
});