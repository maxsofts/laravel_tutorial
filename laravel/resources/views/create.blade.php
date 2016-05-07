
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form trong Laravel 5</title>

</head>
<body>
	<h1>Them Bai Viet Moi</h1>
   {!! Form::open(['url' => 'create_post']) !!}
       {!! Form::label('name','Name:') !!}
       {!! Form::text('name') !!}
       {!!Form::label('create_at','create_date:')!!}
       {!!Form::input('date','create_at',date("Y-d-m"))!!}
		{!! Form::submit('Them moi')!!}
	{!! Form::close() !!}

    @if ( $errors->any() )
        <?php print_r($errors);?>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</body>
</html>