@extends('templates.dashboard')
@section('content_post')
    <h1 class="title">Thêm mới bài viết</h1>
    <div class="content_post" id="content_addnew">
        {!! Form::open(['url' => 'newpost']) !!}
        <div class="row">
            <div class=" col-lg-2">  {!! Form::label('name','Name:') !!}</div>
            <div class="col-lg-10">  {!! Form::text('name') !!}</div>
        </div>
        <div class="row">
            <div class=" col-lg-2">  {!! Form::label('excerpt','Excerpt:') !!}</div>
            <div class="col-lg-10">   {!! Form::textarea('excerpt') !!}</div>
        </div>

        <div class="row">
            <div class=" col-lg-2">  {!! Form::label('content','Content:') !!}</div>
            <div class="col-lg-10">   {!! Form::textarea('content') !!}</div>
        </div>

        {!! Form::submit('Add')!!}
        {!! Form::close() !!}
    </div>
@stop