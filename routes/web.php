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

// Route::get('/', "h");

Auth::routes();

Route::get('admin', 'AdminController@index')->name('home');

Route::get('/session', 'UserController@store');

// Route::get('admin/home', 'AdminController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth', 'middleware' => 'notAdmin'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
});

Route::group(['middleware' => 'auth', 'middleware' => 'notAdmin'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});


// For Seeker Route
Route::resource('job-category', 'JobCategoryController')->middleware('auth');
Route::get('/', 'HomeController@index');
Route::get('/seeker/dashboard', function() {
    return view('seeker.index');
})->name('seeker')->middleware('auth');

Route::get('seeker/job-detail/{id}', function() {
    return view('seeker.show');
})->middleware('auth');


Route::get('showpass', 'UserController@showPass');

Route::get('seeker/profile', 'UserController@showProfile');

Route::post('job-proj', 'ProjectController@store');
Route::post('education', 'EducationController@store');
Route::get('eduEdit', 'EducationController@edit');
Route::post('eduupdate', 'EducationController@update');
Route::get('projectedit', 'ProjectController@edit');
Route::post('job-updateproj', 'ProjectController@update');

Route::get('editworkexp', 'WorkExperienceController@edit');
Route::post('addworkexp', 'WorkExperienceController@store');
Route::post('updateworkexp', 'WorkExperienceController@update');
