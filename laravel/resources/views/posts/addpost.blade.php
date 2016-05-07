@extends('templates.dashboard')
@section('content_post')
    <h1 class="title">Thêm mới bài viết</h1>
    <div class="content_post" id="content_addnew">
     <form method="post" action="{{url('newpost')}}">
         <div class="row">
         <label class="col-lg-2">Name</label>
         <input class="col-lg-10" type="text" name="name">
         </div>
         <div class="row">
             <label class="col-lg-2">Category</label>
            <select>
                <option>cat1</option>
                <option>cat2</option>
            </select>
         </div>
         <div class="row">
             <label class="col-lg-2">Excerpt</label>
             <textarea rows="5" class="col-lg-10" name="excerpt"></textarea>
         </div>
         <div class="row">
             <label class="col-lg-2">Content</label>
             <textarea rows="20" class="col-lg-10" name="content"></textarea>
         </div>
         <div class="row">
           <div class="col-lg-2"></div>
           <button class="col-lg-10" type="submit">Thêm</button>
         </div>
     </form>
    </div>
@stop