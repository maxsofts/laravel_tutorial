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
        $data=$request->all();
        $post=new posts;
        $post->name=$data['name'];
        $post->Excerpt=$data['excerpt'];
        $post->content=$data['content'];
        $post->save();
        return redirect('posts');
    }
    public  function  editpost($id){
        $posts=posts::findOrFail($id);
        return view('posts.editpost',compact('posts'));
    }
    public  function update(Request $request){
        $data=$request->all();
        $posts= posts::find($data['id']);
        $posts->name=$data['name'];
        $posts->Excerpt=$data['excerpt'];
        $posts->content=$data['content'];
          $posts->update();
     return redirect('posts');
    }
    public  function delpost($id){
        $posts=posts::find($id);
        $posts->delete();
        return redirect('posts');
    }
}
