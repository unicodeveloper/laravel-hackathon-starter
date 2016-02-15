<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/api', function () {
        return view('apidashboard');
    });

    Route::get('/login', [
        'uses' => 'Auth\AuthController@getLogin',
        'as'   => 'auth.login',
        'middleware' => ['guest']
    ]);

    Route::post('/login', [
        'uses' => 'Auth\AuthController@postLogin',
        'middleware' => ['guest']
    ]);

    // Password Reset Routes...
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');

    // Social Authentication
    Route::get('/auth/{provider}', 'OauthController@authenticate');

    Route::get('/account', [
        'uses' => 'AccountController@getAccountPage',
        'as'   => 'account.dashboard',
        'middleware' => ['auth']
    ]);

    Route::get('/signup', [
        'uses' => 'Auth\AuthController@getRegister',
        'as'   => 'auth.register',
        'middleware' => ['guest']
    ]);

    Route::get('logout', [
        'uses' => 'Auth\AuthController@logout',
        'as' => 'logout',
    ]);

    Route::post('/signup', [
        'uses' => 'Auth\AuthController@postRegister',
        'middleware' => ['guest']
    ]);

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::post('/contact', [
        'uses' => 'ContactController@sendMessage',
        'as'   => 'contact'
    ]);
});
