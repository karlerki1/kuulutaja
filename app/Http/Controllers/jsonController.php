<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use App\Announ;

class jsonController extends Controller
{
    public function index(){
        $announs = Announ::get();
        return \Response::json($announs)->header('Content-Type',"application/json")->header('Access-Control-Allow-Origin', "*");
        
        //Kuvab kõik kuulutused JSON'ina
    }
}
