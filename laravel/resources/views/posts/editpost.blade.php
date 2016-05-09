@extends('templates.dashboard')
@section('content_post')

    <h1 class="title">{!!$posts->name!!}</h1>
    <div class="content_post" id="content_addnew">
        {{ Form::model($posts, array('action' => 'PostController@update', $posts->id)) }}
        <input type="hidden" name="id" value="{{$posts->id}}" />
        <div class="row">
            <div class=" col-lg-2">  {!! Form::label('name','Name:') !!}</div>
            <div class="col-lg-10">  {!! Form::text('name') !!}</div>
        </div>
        <div class="row">
            <div class=" col-lg-2">  {!! Form::label('excerpt','Excerpt:') !!}</div>
            <div class="col-lg-10">   {!! Form::textarea('Excerpt') !!}</div>
        </div>
        <div class="row">
            <div class=" col-lg-2">  {!! Form::label('content','Content:') !!}</div>
            <div class="col-lg-10">   {!! Form::textarea('content') !!}</div>
        </div>

        {!! Form::submit('Update')!!}
        {!! Form::close() !!}
    </div>
@stop