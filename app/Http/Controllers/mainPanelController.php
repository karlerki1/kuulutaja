<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use App\Announ;
use DB;

class mainPanelController extends Controller
{
  public function getHome(){

    $announs = DB::table('announs')->paginate(20);
    return view('home', ['announs' => $announs]);
  }

  public function specifyAnno(){

    $announs = DB::table('announs')->paginate(20);
    return view('home', ['announs' => $announs]);
  }

  public function getHomee(){
    return view('home');
  }

  public function postNewAnno(Request $request){
    $this ->validate($request, [
      'category'=>'required',
      'introText'=>'required',
      'title'=>'required'
    ]);

    $announ=new Announ();
    $announ->title= $request['title'];
    $announ->introText= $request['introText'];
    $announ->category= $request['category'];
    $announ->price= $request['price'];
    $announ-> save();

    return view('actions.addedAnnou', ['category'=> $request['category'], 'introText' => $request['introText'], 'title'=> $request['title'], 'price'=> $request['price']]);
    }
  }
