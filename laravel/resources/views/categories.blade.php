<html>
<head>
    <title>View Categories</title>
</head>
<body>
<ul>
    @foreach($categories as $categories)
        <li>Name : {{$categories->name}}|Parent:{{$categories->parent}} | Slug:{{$categories->slug}} | Description :{{$categories->description}} | {{$categories->created_at}} </li>
    @endforeach
</ul>
</body>
</html>