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


/*

Route::group(['as' => 'Guest::', 'middleware' => 'guest'], function(){
  Route:get(['uses' => 'LoginController@index', 'as' => 'login']);
});

group, mis on nähtav ainult külalistele (kes pole sisse logitud).
Et kui sa näiteks soovid logimislinki, siis lihtsalt: route('Guest::Login')

Route::group(['prefix'=>''], function(){
  Route::post('/postAnno',[
    'uses'=> 'mainPanelController@postAnno',
    'as'=>'home'
  ]);

  Route::get('/specifyAnno',[
    'uses'=> 'mainPanelController@specifyAnno',
    'as'=>'specifyAnno'
  ]);
  });
*/

Route::group(['prefix'=>''], function(){
  Route::get('/',[
    'uses'=> 'mainPanelController@getHome',
    'as'=>'getHome'
  ]);
  Route::post('/postAnno',[
    'uses'=> 'mainPanelController@postAnno',
    'as'=>'postAnno'
  ]);
  Route::post('/specifyAnno',[
    'uses'=> 'mainPanelController@specifyAnno',
    'as'=>'specifyAnno'
  ]);
});



/* API
* 
* api/v1/ on url, kus peaks json vastus tulema - vähemalt hetkel
*/

Route::group(['as' => 'api::', 'prefix' => 'api/v1'], function(){
    Route::get('/', [
        'uses' => 'jsonController@index',
        'as' => 'index'
    ]);
});
