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
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/userss', function () {
    return view('actions.users', ['username' => "tere"]);
})->name('userss');

Route::get('/users/{username?}', function ($username = null)
 {
    return view('actions.users', ['username' => $username]);
})->name('users');


Route::group(['prefix'=>'add'], function(){
  Route::post('/', [
    'uses'=> 'mainPanelController@postNewAnno',
    'as'=>'addAnnouncement'
    ]);
});

Route::group(['prefix'=>''], function(){
  Route::get('/',[
    'uses'=> 'mainPanelController@getHome',
    'as'=>'home'
  ]);
  });
