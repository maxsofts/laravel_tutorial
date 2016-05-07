<html>
<head>
    <meta charset="utf-8">
    <title>Đăng ký Thành viên</title>
</head>
<body>
 <h1>Đăng ký thành viên</h1>
<form method="post" action="{{url('/auth/register')}}">
    {!!csrf.field()!!}
    @if(count($errors)>0)
      <div id="errors">
          <p>Có lỗi xảy ra</p>
          @foreach($errors->all()as $error)
           <li>{{$error}}</li>
          @endforeach
      </div>
    @endif
   <div>
       <label>Tài khoản :</label>
       <input type="text" name="name" id="name" placeholder="Tên tài khoản">
   </div>
   <div>
       <label>Mật khẩu</label>
       <input type="password" name="password" placeholder="mật khẩu">
   </div>
    <div>
        <label>Xác định mật khẩu</label>
        <input type="password" name="password_confirmation" placeholder="Xác định mật khẩu">
    </div>
    <div>
        <label>Email</label>
        <input type="text" name="email" placeholder="Email">
    </div>
    <button type="submit"> Đăng ký</button>
</form>
</body>
</html>