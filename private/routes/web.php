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
Route::get('/', function(){
    return view('pages.admin.logaktivitas');
});

Route::get('post', function () {
    return view('pages.admin.post');
});

Route::resource('/list-post', 'BlogController');
Route::get('/add-post', 'BlogController@create')->name('add');
Route::get('/list-post', 'BlogController@index')->name('list');
Route::post('/add-post/post', 'BlogController@store');
Route::get('/list-post/delete/{id}', 'BlogController@destroy');
Route::get('/list-post/view/{id}', 'BlogController@show');
Route::get('/list-post/edit/{id}', 'BlogController@edit');
Route::get('/list-post/update/{id}', 'BlogController@update');

Route::get('dtpengunjung', function () {
    return view('pages.admin.dtpengunjung');
});

Route::get('profil', function () {
    return view('pages.admin.profil');
});

Route::get('login', 'BlogController@index');
//user view------------------------------------------------------------------

Route::get('/novels', 'NovelsController@index')->name('novels');
Route::get('/komik', 'KomikController@index')->name('komik');
Route::get('/films', 'FilmController@index')->name('films');

Route::get('about', function () {
    return view('pages.user.about');
});

// Route::get('readmore', function () {
//     return view('pages.user.readmore');
// });

Route::resource('/home', 'HomeController');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/list-post/view/{id}', 'CommentController');
Route::post('/list-post/view/{id}', 'CommentController@store');
Route::get('/list-post/view/{id}', 'CommentController@index')->name('list');
Route::post('/list-post/view/{id}', 'CommentController@index');
Route::get('/list-post/view/{id}', 'CommentController@show');