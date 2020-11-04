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

Route::get('/success', function(){
	return view('success');
});

Route::get('/help', function(){
	return view('help');
});

Route::get('/profile', function(){
	return view('profile');
});

Route::get('/search-result', function(){
	return view('search-result');
});

Route::get('/high-membership', function(){
	return view('high-membership');
});

Route::get('/contact', function(){
	return view('contact');
});


Route::get('/about', function(){
	return view('about');
});

Route::any('forget_pswd',function(){
	return view('auth.forget_pswd');
});

Route::get('forgetpswd','Admin\ForgotController@forgot_pswd');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/admin/downloadFranchise', 'Admin\PanditController@downloadFranchise');
Route::get('/admin/pandits', 'Admin\PanditController@index')->name('pandits');
Route::get('/admin/pandit/create','Admin\PanditController@create');
Route::post('/admin/pandit/store','Admin\PanditController@store');
Route::any('admin/pandit/edit/{id}', 'Admin\PanditController@editUser');
Route::post('/admin/pandit/update', 'Admin\PanditController@update');
Route::any('/admin/pandit/delete', 'Admin\PanditController@userDelete');

Route::get('/admin/users', 'Admin\UserController@index')->name('users');
Route::get('/admin/user/create','Admin\UserController@create');
Route::post('/admin/user/store','Admin\UserController@store');
Route::any('admin/user/edit/{id}', 'Admin\UserController@editUser');
Route::any('/admin/user/update', 'Admin\UserController@update');
Route::any('/admin/user/delete', 'Admin\UserController@userDelete');

Route::get('/admin/setting','Admin\SettingController@index')->name('setting');
Route::get('/admin/setting/update','Admin\SettingController@update')->name('setting');

Route::get('/admin/pswd','Admin\SettingController@pswd');
Route::get('/admin/changepswd','Admin\SettingController@changepswd');
