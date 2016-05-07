<?php

namespace App\Http\Controllers;

use App\posts;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function view()
    {
        $getpos = posts::all();
        return view('posts.post')->with('getpost', $getpos);
    }

    public function  newpost()
    {
      return view('posts.addpost');
    }
    public function  addpost(Request $request)
    {

        var_dump($request);die();
        $data=$request->all();
        $post=new posts;
        $post->name=$data['name'];
        $post->Excerpt=$data['excerpt'];
        $post->content=$data['content'];
        $post->save();
        return redirect('posts.post');
    }

}
