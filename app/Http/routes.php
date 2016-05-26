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

Route::get('/', 'IndexController@login');

Route::get('/j', 'IndexController@login');

Route::get('addIssue', 'IndexController@addIssue');

Route::get('leaderboard', 'LeaderBoardController@ldrview');

Route::get('issues', 'IssuesController@issues');

Route::get('solution/{issue_No}','AddSolutionController@showpage');

Route::post('sendIssues/{title}/{location}/{description}/{maploc}', array('as'=>'sendIss','uses'=>'addIssueController@addIssue'));

Route::get('first', array('as'=>'first','uses'=>'MoraController@first'));

Route::get('reg', array('as'=>'register','uses'=>'IndexController@register'));

Route::get('addIssue', 'IndexController@addIssue');

Route::get('user', 'MoraController@seeUser');

Route::get('/login', 'IndexController@login');

Route::get('register', array('as'=>'registerForm','uses'=>'MoraController@register'));

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
