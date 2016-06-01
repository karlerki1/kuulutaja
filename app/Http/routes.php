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
});

Route::get('/userPage', function () {
    return view('actions.userPage');
})->name('userPageYYYY');

Route::get('/userPage/{username?}', function ($username) {
    return view('actions.userPage', ['username' => $username]);
})->name('userPage');

Route::post('/testerPage', function(\Illuminate\Http\Request $request) {
  if (isset($request['introtext']) && $request['category'] && $request['title']) {
    if(strlen($request['introtext'])>0 && strlen($request['title'])>0 ){
      return view('actions.testerPage', ['category'=> $request['category'], 'introText' => $request['introtext'], 'title'=> $request['title']]);
    }

    return redirect()->back();


  }
  return redirect()->back();
})->name('addAnnouncement');
