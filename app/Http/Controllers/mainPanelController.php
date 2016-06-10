<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use View;
use App\Announ;
use DB;

class mainPanelController extends Controller
{
  public $restful = true;
  public function postAnno(){
    /*
    $this ->validate($request, [
      'category'=>'required',
      'introText'=>'required',
      'title'=>'required'
    ]);
    */

    $announ=new Announ();
    $announ->title= Input::get('title');
    $announ->introText= Input::get('introText');
    $announ->category= Input::get('category');
    $announ->price= Input::get('price');
    $announ->save();

    $return = ['success' => true, 'message' => "Kuulutus lisatud", "announ" => $announ];
    return response()->json($return);
    }

/*
    public function getIndex() {
      $announs = Announ::all();
      return View::make("home")->with("announs", $announs);
    }
*/
  public function getHome(){

    $announs = DB::table('announs')->paginate(20);
    return view('home', ['announs' => $announs]);
  }

  public function specifyAnno()
  {
    $announs = DB::table('announs')->paginate(20);
    return view('home', ['announs' => $announs]);
  }

  public function getHomee(){
    return view('home');
  }
  
}