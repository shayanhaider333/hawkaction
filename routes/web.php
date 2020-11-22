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
    return view('auth.login');
});
 
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/index','mainCtrl@index');

//===============================================================================================================
// ================================================== USER ROUTES ===============================================
//===============================================================================================================

// REPORTING PAGE
Route::get('/client/reporting', 'HomeController@index')->name('reporting');
Route::GET('/client/reports','HomeController@getuserreports')->name('getuserreports');

// DETAIL PAGE
Route::GET('/client/details/{id}','DetailController@userindex')->middleware('auth')->name('detail');
Route::POST('/client/request','DetailController@videoReq')->middleware('auth')->name('request');
Route::POST('/client/comment','DetailController@user_comment')->middleware('auth')->name('user-comment');
Route::GET('/client/delcomment/','DetailController@user_comment_delete')->middleware('auth')->name('delete-user-comment');

// VIDEO REQUEST PAGE
Route::GET('/client/user-video-request','ReqController@userindex')->middleware('auth');
Route::GET('/client/check-data','ReqController@usercheckData')->middleware('auth')->name('usercheckdata');
Route::GET('/client/show-records','ReqController@usershow')->middleware('auth')->name('usershowdata');

// FILTER REPORT PAGE ROUTES
Route::GET('/client/filter-report','FilterController@userindex')->middleware('auth');
Route::GET('/client/filter-report-show','FilterController@usershow')->middleware('auth')->name('user-filter-report-show');
Route::GET('/client/filter-getcamera/{id}','FilterController@usergetcamera')->middleware('auth');
Route::POST('/client/filter-records','FilterController@userfilterrecords')->middleware('auth')->name('user-filter-records');

// STORE ROUTES
Route::GET('/client/store','StoreController@userindex')->middleware('auth');
Route::GET('/client/showstore','StoreController@usershow')->middleware('auth')->name('usershowstore');

// BULK PRINTING
Route::GET('/client/printing','PrintController@userindex')->middleware('auth');
Route::GET('/client/fetchprints/{id}','PrintController@userfetchprints')->middleware('auth')->name('userfetchprints');

// PROFILE PAGE ROUTES
Route::GET('/client/user-profile','ProfileController@userindex')->middleware('auth')->name('user-profile');
Route::POST('/client/user-profile-edit','ProfileController@user_edit')->middleware('auth')->name('user-profile-edit');
Route::POST('/client/user-reset-pass','ProfileController@user_reset_password')->middleware('auth')->name('user-reset-pass');


//===============================================================================================================
//================================================== ADMIN ROUTES ===============================================
//===============================================================================================================

Route::get('admin/home', 'adminController@index')->name('admin.home');
Route::GET('admin','admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','admin\LoginController@login');
Route::POST('admin/password/email','admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin/password/reset','admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin/password/reset','admin\ResetPasswordController@reset')->name('admin.password.update');
Route::GET('admin/password/reset/{token}', 'admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

// CREATE NEW ADMIN
Route::GET('/admin/create-admin','adminController@newadmin');
Route::GET('/admin/show-admin','adminController@showAdmin')->name('showadmin');
Route::POST('/admin/add-new-admin','adminController@addNewAdmin')->name('addnewadmin');

// CREATE NEW USER
Route::GET('/admin/new-user','adminController@newUser');
Route::GET('/admin/show-user','adminController@showUser')->name('showuser');
Route::POST('/admin/add-new-user','adminController@addNewUser')->name('addnewuser');
Route::GET('/admin/edit-user/{id}','adminController@edituser')->middleware('auth:admin')->name('edit-user');

//ADMIN PROFILE
Route::GET('/admin/profile','ProfileController@index')->middleware('auth:admin');
Route::POST('/admin/profile-edit','ProfileController@edit')->middleware('auth:admin')->name('profile-edit');
Route::POST('/admin/reset-admin-pass','ProfileController@reset_password')->middleware('auth:admin')->name('reset-admin-pass');


// Report Routes
Route::GET('/admin/new-report','ReportController@index');
Route::POST('report','ReportController@store')->name('report');
Route::GET('/admin/show','ReportController@show')->name('getrecords');
Route::GET('/admin/delete/{id}','ReportController@delete_report')->name('delete');
Route::GET('/admin/getstore/{id}','ReportController@getstore')->name('getstore');
Route::GET('/admin/getcamera/{id}','ReportController@getcamera')->name('getcamera');



// DETAIL PAGE
Route::GET('/admin/details/{id}','DetailController@index')->middleware('auth:admin')->name('detail');
Route::POST('/admin/doc','DetailController@upload_doc')->middleware('auth:admin')->name('doc');
Route::POST('/admin/link','DetailController@upload_link')->middleware('auth:admin')->name('link');
Route::POST('/admin/comment','DetailController@admin_comment')->middleware('auth:admin')->name('admin-comment');
Route::GET('/admin/delcomment/','DetailController@admin_comment_delete')->middleware('auth:admin')->name('delete-admin-comment');


// VIDEO CHECK ROUTES
Route::GET('/admin/video-request','ReqController@index')->middleware('auth:admin');
// 1.1 CHECK NEW ROWS 
Route::GET('/admin/check-data','ReqController@checkData')->middleware('auth:admin')->name('checkdata');
Route::GET('/admin/show-records','ReqController@show')->middleware('auth:admin')->name('showdata');
// 1.2 APPROVE REQUEST
Route::GET('/admin/approve/{id}','ReqController@approve')->middleware('auth:admin')->name('approve'); 

// STORE ROUTES
Route::GET('/admin/store','StoreController@index')->middleware('auth:admin');
Route::GET('/admin/showstore','StoreController@show')->middleware('auth:admin')->name('showstore');
Route::GET('/admin/delstore/{id}','StoreController@delete')->middleware('auth:admin')->name('delstore');
Route::POST('/admin/store','StoreController@store')->middleware('auth:admin')->name('addstore');
Route::POST('/admin/addcamera','StoreController@addcamera')->middleware('auth:admin')->name('addcamera');


// FILTER REPORT PAGE ROUTES
Route::GET('/admin/filter-report','FilterController@index')->middleware('auth:admin');
Route::GET('/admin/filter-report-show','FilterController@show')->middleware('auth:admin')->name('filter-report-show');
Route::GET('/admin/filter-getstore/{id}','FilterController@getstore')->middleware('auth:admin');
Route::GET('/admin/filter-getcamera/{id}','FilterController@getcamera')->middleware('auth:admin');
Route::POST('/admin/filter-records','FilterController@filterrecords')->middleware('auth:admin')->name('filter-records');

// BULK PRINTING
Route::GET('/admin/printing','PrintController@index')->middleware('auth:admin');
Route::GET('/admin/fetchprints/{id}','PrintController@fetchprints')->middleware('auth:admin')->name('fetchprints');



//checking
// Route::get('/admin/user','mainCtrl@index')->name('user');
Route::view('/check','check1');
Route::post('/ch','mainCtrl@index');
// Route::view('/check','admin_auth.loginn');
//Route::get('/logout1', 'Auth\LoginController@logout')->name('logout1');
