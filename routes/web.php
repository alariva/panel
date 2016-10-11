<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/dashboard-access/{userId}', ['middleware' => 'signedurl', function ($userId) {
    Auth::loginUsingId($userId);
    return redirect()->to('/');
}]);

Route::get('/', [
    'as'   => 'home',
    'uses' => 'HomeController@index',
]);

Route::get('/terms-and-conditions', [
    'middleware' => ['can:read terms-and-conditions'],
    'as'         => 'frontoffice.terms-and-conditions.show',
    'uses'       => 'Frontoffice\TermsAndConditionsController@show',
]);

Route::get('/quotecalculator', [
    'as'         => 'frontoffice.quotecalculator.show',
    'uses'       => 'Frontoffice\QuoteCalculatorController@show',
]);

Route::post('/quotecalculator', [
    'as'         => 'frontoffice.quotecalculator.post',
    'uses'       => 'Frontoffice\QuoteCalculatorController@post',
]);

Route::get('/dashboard', [
    'as'         => 'frontoffice.dashboard.show',
    'uses'       => 'Frontoffice\DashboardController@show',
]);

Route::group(['prefix' => 'backoffice', 'namespace' => 'Backoffice'], function () {

    Route::get('/signurl/{userId}', [function ($userId) {
        return UrlSigner::sign(url("/dashboard-access/{$userId}"), 30);
    }]);

    Route::group(['prefix' => 'terms-and-conditions', 'middleware' => ['can:edit terms-and-conditions']], function () {

        Route::get('/', [
            'middleware' => ['can:read terms-and-conditions'],
            'as'         => 'backoffice.terms-and-conditions.show',
            'uses'       => 'TermsAndConditionsController@show',
        ]);

        Route::get('/edit', [
            'as'   => 'backoffice.terms-and-conditions.edit',
            'uses' => 'TermsAndConditionsController@edit',
        ]);

        Route::put('/update', [
            'as'   => 'backoffice.terms-and-conditions.update',
            'uses' => 'TermsAndConditionsController@update',
        ]);

    });

});

Auth::routes();

Route::get('/home', 'HomeController@index');
