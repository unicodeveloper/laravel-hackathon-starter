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

    Route::get('/api/github', [
        'uses' => 'GithubController@getPage',
        'as'   => 'api.github',
        'middleware' => ['auth']
    ]);

    Route::get('/api/twitter', [
        'uses' => 'TwitterController@getPage',
        'as'   => 'api.twitter',
        'middleware' => ['auth']
    ]);

    Route::get('/api/lastfm', [
        'uses' => 'LastFmController@getPage',
        'as'   => 'api.lastfm',
        'middleware' => ['auth']
    ]);

    Route::get('/api/nyt', [
        'uses' => 'NytController@getPage',
        'as'   => 'api.nyt',
        'middleware' => ['auth']
    ]);

    Route::get('/api/steam', [
        'uses' => 'SteamController@getPage',
        'as'   => 'api.steam',
        'middleware' => ['auth']
    ]);

    Route::get('/api/stripe', [
        'uses' => 'StripeController@getPage',
        'as'   => 'api.stripe',
        'middleware' => ['auth']
    ]);

    Route::get('/api/paypal', [
        'uses' => 'PaypalController@getPage',
        'as'   => 'api.paypal',
        'middleware' => ['auth']
    ]);

    Route::get('/api/twilio', [
        'uses' => 'TwilioController@getPage',
        'as'   => 'api.twilio',
        'middleware' => ['auth']
    ]);

    Route::post('/api/twilio', [
        'uses' => 'TwilioController@sendTextMessage',
        'middleware' => ['auth']
    ]);

    Route::get('/api/scraping', [
        'uses' => 'WebScrapingController@getPage',
        'as'   => 'api.scraping',
        'middleware' => ['auth']
    ]);

    Route::post('/tweet/new', [
        'uses' => 'TwitterController@sendTweet',
        'as'   => 'tweet.new',
        'middleware' => ['auth']
    ]);

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

    Route::post('/account/profile', [
        'uses' => 'AccountController@updateProfile',
        'as'   => 'account.profile',
        'middleware' => ['auth']
    ]);

    Route::post('/account/photo', [
        'uses' => 'AccountController@updateAvatar',
        'as'   => 'account.avatar',
        'middleware' => ['auth']
    ]);

    Route::post('/account/password', [
        'uses' => 'AccountController@changePassword',
        'as'   => 'account.password',
        'middleware' => ['auth']
    ]);

    Route::post('/account/delete/now', [
        'uses' => 'AccountController@deleteAccount',
        'as'   => 'account.delete.now',
        'middleware' => ['auth']
    ]);


    Route::get('/account/confirm/delete', [
        'uses' => 'AccountController@redirectToConfirmDeletePage',
        'as'   => 'account.confirm.delete',
        'middleware' => ['auth']
    ]);

    Route::get('/account/delete/later', [
        'uses' => 'AccountController@dontDeleteAccount',
        'as'   => 'account.dont.delete',
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
