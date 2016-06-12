<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use View;
use App\Announ;
//use DB;

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

    public function specifyAnno(Request $request)
      {
        $announs = Announ::FilterRequest($request)->get();
        $return = ['success' => true, 'len' => $announs->count(), "announs" => $announs->toArray()];
        return response()->json($return);

      }

/*
    public function getIndex() {
      $announs = Announ::all();
      return View::make("home")->with("announs", $announs);
    }
*/
  public function getHome(){
    return view('home');
  }


  
}
