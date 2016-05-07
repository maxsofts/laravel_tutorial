@extends('layouts.app')
<?php /*<link rel="stylesheet" href="{{asset('css/reset.css')}}">*/?>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3" id="sidebar_admin">
                                <ul>
                                    <li>

                                        <a href="{{url("/posts")}}">Posts</a>
                                        <ul>
                                            <li><a href="{{url('/posts')}}">All posts</a></li>
                                            <li><a href="{{url('addpost')}}">Add new</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Category</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-9" id="content_admin">
                                @yield('content_post')
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
