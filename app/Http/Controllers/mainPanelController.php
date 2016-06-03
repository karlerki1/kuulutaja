<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use App\Announ;

class mainPanelController extends Controller
{
  public function getHome(){
    $announs = Announ::all();
    return view('home', ['announs' => $announs]);
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
