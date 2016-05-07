<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;

use App\Http\Requests\CheckFormRequest;
use App\categories;
class ArticlesController extends Controller
{
    public function store(CheckFormRequest $request){
        var_dump($request);die();
        $data=$request->All();
       categories::create($data);
		return redirect('articles');
    }

    public function articles(){
        return view('articles');
    }
}
