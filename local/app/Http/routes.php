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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/licences', 'AjaxRequest@getLicences');

Route::get('/getLicencesList', 'AjaxRequest@getLicencesList');

Route::get('/getData4', 'AjaxRequest@getData1');

Route::get('/getData2', 'AjaxRequest@getData2');

Route::get('/getData3', 'AjaxRequest@getData3');

Route::post('/evoTiPodaci', 'AjaxRequest@obradiPodatke');

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
    //
});
