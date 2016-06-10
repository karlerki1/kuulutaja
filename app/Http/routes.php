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

Route::get('/users/{username?}', function ($username = null)
 {
    return view('actions.users', ['username' => $username]);
})->name('users');


Route::group(['prefix'=>'add'], function(){
  Route::post('/', [
    'uses'=> 'mainPanelController@postAnno',
    'as'=>'addAnnouncement'
    ]);
});

/*

Route::group(['as' => 'Guest::', 'middleware' => 'guest'], function(){
  Route:get(['uses' => 'LoginController@index', 'as' => 'login']);
});

group, mis on nähtav ainult külalistele (kes pole sisse logitud).
Et kui sa näiteks soovid logimislinki, siis lihtsalt: route('Guest::Login')
*/
Route::group(['prefix'=>''], function(){
  Route::post('/postAnno',[
    'uses'=> 'mainPanelController@postAnno',
    'as'=>'home'
  ]);

  Route::get('/',[
    'uses'=> 'mainPanelController@specifyAnno',
    'as'=>'specifyAnno'
  ]);
  });
