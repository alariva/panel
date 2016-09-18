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

Route::get('/', [
    'as'   => 'home',
    'uses' => 'HomeController@index',
]);

Route::get('/tos', [
    'middleware' => ['can:read terms-and-conditions'],
    'as'         => 'frontoffice.terms-and-conditions.show',
    'uses'       => 'Frontoffice\TermsAndConditionsController@show',
]);

Route::group(['prefix' => 'backoffice', 'namespace' => 'Backoffice', 'middleware' => ['can:edit terms-and-conditions']], function () {

    Route::get('/tos', [
        'middleware' => ['can:read terms-and-conditions'],
        'as'         => 'backoffice.terms-and-conditions.show',
        'uses'       => 'TermsAndConditionsController@show',
    ]);

    Route::get('/tos/edit', [
        'as'   => 'backoffice.terms-and-conditions.edit',
        'uses' => 'TermsAndConditionsController@edit',
    ]);

    Route::put('/tos/update', [
        'as'   => 'backoffice.terms-and-conditions.update',
        'uses' => 'TermsAndConditionsController@update',
    ]);

});

Auth::routes();

Route::get('/home', 'HomeController@index');
