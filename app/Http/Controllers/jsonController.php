<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use App\Announ;

class jsonController extends Controller
{
    public function index(){
        $announs = Announ::all();
        return response()->json($announs);
        
        //Kuvab kõik kuulutused
    }
}
