<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Announ extends Model
{
    protected $table = "announs";

    public function scopeFilterRequest($query, Request $request)
    {
        $title = $request->input('title', false);
        $category = $request->input('category', 'koik');
        $minPrice = $request->input('minPrice', 0);
        $maxPrice = $request->input('maxPrice', 999999);


        $query->orderBy('created_at' , 'desc');
        if($category != "koik")
        {
            $query->where('category', '=', $category);
        }

        if(($minPrice != "")&& ($maxPrice != "")){
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        } elseif(($minPrice == "")&& ($maxPrice != "")){
            $query->whereBetween('price', [0, $maxPrice]);
        } elseif(($minPrice != "")&& ($maxPrice == "")){
            $query->whereBetween('price', [$minPrice, 999999]);
        }

        return $query;
    }

}

