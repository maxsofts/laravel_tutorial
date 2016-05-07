<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
  public function abloutme(){
    $data="Mr.Dinh";
    return view('pages.aboutme')->with('name',$data);
  } 
  public function category(){
    $cate=categories::all();
    return $cate;
  }//
}
