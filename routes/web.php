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
use Illuminate\Http\Request;
//    log in
Route::get('/', function () {
    return view('sign.signIn');
}) -> name('signIn');
Route::post(
    '/signIn', 'Admin\LoginController@userlogin'
) -> name('signIn');
Route::get('/logout', 'Admin\LoginController@userlogout') -> name('logout');

    // Register
Route::get('/signUp', function () {
    return view('sign.signUp');
}) -> name('signUp');
Route::post(
    '/signUp', 'Admin\LoginController@register'
) -> name('register');

// app user log in
Route::get('app_signin', function () {
    return view('sign.app-user-login');
}) -> name('appsignIn');
Route::post(
    'app_signIn', 'Admin\LoginController@appUserlogin'
) -> name('appsignIn');
//  app election
Route::get('app_action', function(){
    return view('front_end.app_action');
}) -> name('app_action');
Route::post(
    'app_action', 'Admin\LoginController@appUserSubmit'
) -> name('app_submit');
Route::post(
    'register_app_data','Admin\RegisterDataController@registerAppdata'
) -> name('registerAppdata');
Route::post(
    'app_sign_up','Admin\RegisterDataController@appSignup'
) -> name('appsingup');
Route::post(
    'app_log_in','Admin\RegisterDataController@appLogin'
)->name('appLogin');
// chart management
Route::get(
    '/chart', 'Admin\ChartController@get_patientdata'
) -> name('chart');
Route::get(
    '/profile', 'Admin\ChartController@get_profile'
) -> name('profile');

Route::group(['middleware' => ['mineauth']], function ()
{
    // dashboard management
    Route::get(
        '/dashboard', 'Admin\DashboardController@dashboard'
    ) -> name('dashboard');
    Route::post(
        '/dashboard/realtime', 'Admin\DashboardController@realtime'
    );


    //  User management
    // normal user management
    Route::get(
        '/user/normal-user', 'Admin\UserController@get_patientdata'
    ) -> name('normal-user');
    // delete the normal user
    Route::post(
        '/user/normal-user/delete', 'Admin\UserController@delete_normal_user'
    );
    // add the normal user
    Route::post(
        '/user/normal-user/add', 'Admin\UserController@add_normal_user'
    );
    // update the normal user
    Route::post(
        '/user/normal-user/update', 'Admin\UserController@update_normal_user'
    );
    // check normaluser online
    Route::post(
        '/user/normal-user/check_online', 'Admin\UserController@check_normal_user'
    );


    // app user management
    Route::get(
        '/user/app-user', 'Admin\UserController@get_app_user'
    ) -> name('app-user');
    // delete the app user
    Route::post(
        '/user/app-user/delete', 'Admin\UserController@delete_app_user'
    );
    // add the app user
    Route::post(
        '/user/app-user/add', 'Admin\UserController@add_app_user'
    );
    // app user register
    Route::get('/app_signUp', function () {
        return view('sign.app-user-signUp');
    }) -> name('appsignUp');
    Route::post(
        '/app_signUp', 'Admin\LoginController@appUserRegister'
    ) -> name('appregister');
    // upload csv app users file

    Route::post(
        '/upload_csv', 'Admin\UserController@appUserUpload'
    ) -> name('appUserUpload');

    // update the app user
    Route::post(
        '/user/app-user/update', 'Admin\UserController@update_app_user'
    );




    // media management
    Route::get(
        '/media', 'Admin\MediaController@get_media'
    ) -> name('media');
    Route::get(
        '/media/category', 'Admin\MediaController@get_media_ward'
    );

    // profile

//    Rogue::get(
//        '/volume','Admin\ChartController@get_volume')->name('volume');
    //
    Route::get(
        '/ex', 'Admin\ChartController@ex'
    );
});
