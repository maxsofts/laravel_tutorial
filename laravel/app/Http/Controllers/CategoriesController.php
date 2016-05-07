<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\categories;


class CategoriesController extends Controller
{
  public function category(){
    $cate=categories::all();
     return view('category')->with('cate',$cate);
    
  }///
}
