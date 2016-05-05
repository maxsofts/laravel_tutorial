<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form trong Laravel 5</title>
</head>
<body>
<h1>Them Bai Danh Mục</h1>
{!! Form::open(['url' => 'categories']) !!}
    {!! Form::label('name','Name:') !!}
    {!! Form::text('name') !!}<br/>
    {!! Form::label('parent','Parent:') !!}
    {!! Form::text('parent') !!}<br/>
    {!! Form::label('slug','Slug:') !!}
    {!! Form::text('slug') !!}<br/>
    {!! Form::label('description','Description:') !!}
    {!! Form::text('description') !!}<br/>
    {!! Form::label('created_at','Created Date:') !!}
    {!! Form::input('date', 'created_at', date("Y-m-d")) !!} <br />
    {!! Form::submit('Them moi')!!}
{!! Form::close() !!}
@if ( $errors->any() )
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
</body>
</html>