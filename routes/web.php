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

use App\Http\Controllers\CompanyController;
use Facade\FlareClient\Http\Response;

Auth::routes();
Route::match(['get'], 'register', function () {
    return abort(403, 'Forbidden');
})->name('register');

Route::match(['get'], 'login', function () {
    return abort(403, 'Forbidden');
})->name('login');
// Auth::routes(['register' => false]);

Route::get('seeker/register', 'Auth\RegisterController@showRegistrationForm')->name('seekerRegister');
Route::get('employer/register', 'Auth\RegisterController@showRegistrationForm')->name('employerRegister');

Route::get('seeker/login', 'Auth\LoginController@showLoginForm')->name('seekerlogin');
Route::get('employer/login', 'Auth\LoginController@showLoginForm')->name('employeerlogin');
// Route::post('register', 'Auth\RegisterController@register')->name('register');

Route::get('admin', 'AdminController@index')->name('home');

Route::get('/session', 'UserController@store');

// Route::get('admin/home', 'AdminController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth', 'middleware' => 'notAdmin'], function () {
    // Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
    Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
    Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
    Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
    Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
    Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
    Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
});

Route::group(['middleware' => 'auth', 'middleware' => 'employer'], function () {
    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});


// For Seeker Route
Route::resource('job-category', 'JobCategoryController')->middleware('auth');
Route::get('/', 'HomeController@index')->name("main");
Route::get('/seeker/dashboard', 'PostController@index')->name('seeker')->middleware('auth');

Route::get('seeker/job-detail/{id}', 'PostController@show')->middleware('auth');
// Route::resource('posts', 'PostController');


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
Route::get('/seeker/generate-certificate/{userID}', 'UserController@generateCertificate')->name('seeker.generate_certificate');

Route::post('applyCv','UserController@applyCvToCompany');

Route::post('checkApplyPost','UserController@checkApplyPost');




// FOREMPLOYER ROUTES
Route::group(['middleware' => 'employer'], function () {
    Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
    Route::get('employer', "CompanyController@index")->name("employer");

    Route::get('jobs', 'PostController@employerindex')->name('jobs');
    Route::get('livesearch', 'PostController@livesearch');
    Route::get('company/view', 'CompanyController@edit')->name('company');
    Route::get('findcountry', 'HomeController@countrySearch');
    Route::get('city', 'HomeController@searchCity');

    // Resume
    Route::get('appliedresume', function() {
        return view('employer.applyresume');
    })->name('appliedresume');

    // POST
    Route::post('posts', 'PostController@store')->name('createpost');
    Route::get('changejobstatus', 'PostController@edit');

});


// For ADMIN
Route::group(['middleware' => 'notAdmin'], function () {
// ADMIN Dashboard
Route::get('admin', 'JobCategoryController@index');
Route::get('all-employer', ['as' => 'all-employer', 'uses' => 'AdminController@allEmployer']);
Route::get('all-seeker', ['as' => 'allseeker', 'uses' => 'AdminController@allSeeker']);
Route::get('getallseeker', 'AdminController@getallseeker')->name('getallseeker');
Route::get('getcompanies', 'AdminController@getcompanies')->name('getcompanies');

});

Route::post('company/company-info', 'CompanyController@update');


//for all resumes
Route::get('allresumes','CompanyController@getAllResume')->name('allresumes');

//for purchased
Route::get('purchasedresumes', function(){
    return view('resumes.purchased');
})->name('purchased');


//Route::get('sendEmail', function() {
//    return Response("hi");
//});


Route::get('company/detail/{id}', 'CompanyController@show')->name('hotjobs');
Route::get('company/detail/alljobs/{id}', 'CompanyController@alljobs')->name('alljobs');

// JOB SEARCH
Route::get('result', 'PostController@searchjobs');

//  JOB PREGERRED Page

Route::post('getallcategory', 'JobCategoryController@getall');
Route::post('jobcatlivesearch', 'JobCategoryController@jobcatlivesearch');

// JOBPReference
Route::post('job_perefernce/create', 'JobPreferenceController@store');
Route::post('updatepreference', 'JobPreferenceController@update');
// Route::get('editpreference', 'JobPreferenceController@edit');

//Profile Detail
Route::post('profile_detail/create','ProfileDetailController@store');
Route::post('updatepersonaldetail', 'ProfileDetailController@update');

// Certificate
Route::post('certificate', 'CertificateController@store');
Route::get('certEdit', 'CertificateController@edit');
Route::post('certupdate', 'CertificateController@update');

Route::get('getDocument', 'ProfileDetailController@getDocument')->name('cv_file.getDocument');

Route::get('dropDocument', 'ProfileDetailController@dropDocument')->name('cv_file.dropDocument');

Route::get('seeker/applied-job/{id}', 'PostController@appliedjob');

// Skill

Route::post('skills', 'ProfileDetailController@addskill');
Route::post('deleteskill', 'ProfileDetailController@deleteskill');
Route::post('phone_edit', 'UserController@phoneupdate');
Route::post('email_edit', 'UserController@emailupdate');
Route::get('/seeker/view-resume/{userID}', 'UserController@generateCertificate')->name('seeker.view_resume');

Route::get('jobs/{cateid}', 'PostController@showbycate');
