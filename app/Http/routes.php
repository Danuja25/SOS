<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('login', 'IndexController@login');
Route::post('login', ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout','Auth\AuthController@getLogout');

Route::get('register', array('as' => 'registerUser', 'uses' => 'UserController@viewRegister'));
Route::post('register', array('as' => 'registerUser', 'uses' => 'UserController@create'));
Route::get('registerReq', array('as' => 'registerReq', 'uses' => 'UserController@viewRequesterReg'));
Route::post('registerReq', array('as' => 'registerReq', 'uses' => 'UserController@createRequester'));
Route::get('registerPh', array('as' => 'registerPh', 'uses' => 'UserController@viewPhilanthropistReg'));
Route::post('registerPh', array('as' => 'registerPh', 'uses' => 'UserController@createPhilanthropist'));
Route::get('/', function () {
    if (\Illuminate\Support\Facades\Auth::check()) {
        return redirect()->to('issues');
    }
    return redirect()->to('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('addIssue', array('as' => 'addIssue', 'uses' => 'IssuesController@viewAddIssue'));
    Route::post('addIssue', 'IssuesController@createIssue');
    Route::get('leaderboard', 'LeaderBoardController@ldrview');
    Route::get('issues', 'IssuesController@issues');
    Route::get('addSolution/{issue}', 'SolutionsController@viewAddSolution');
    Route::post('addSolution', 'SolutionsController@createSolution');
    Route::post('sendIssues/{title}/{location}/{description}/{maploc}', array('as' => 'sendIss', 'uses' => 'addIssueController@addIssue'));
    Route::get('first', array('as' => 'first', 'uses' => 'MoraController@first'));
    Route::get('reg', array('as' => 'register', 'uses' => 'IndexController@register'));

    Route::get('user', 'MoraController@seeUser');
});