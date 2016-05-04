<?php

namespace App\Http\Controllers;
use App\Categories;
use Illuminate\Http\Request;
use App\Http\Requests\CheckArticlesRequest;
use App\Http\Requests;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Categories::all();

        return view('categories')->with('categories',$categories);
    }
    public function create(){
        return view('create');
    }
    public function store(CheckArticlesRequest $request){
        $dulieu_tu_input = $request->all();

        Categories::create($dulieu_tu_input);;
        return redirect('categories');
    }
}
