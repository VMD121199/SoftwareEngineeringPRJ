<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ĐĂNG NHẬP</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <div class="box100pt bgyellow">
            <div class="boxcenter">
                <div class="logo">
                    <img src="img/chottot.jpg">
                </div>
                <a href="#"><button><b>ĐĂNG TIN</b></button></a>
                <a href="#">Tôi Bán</a>
                <a href="#">Thông Báo</a>
                <a href="#">Tìm rao vặt</a>
            </div>
        </div>
    </header>
<!--       <form action="{{route('login')}}" method="post" class="login-form">
        <h1>ĐĂNG NHẬP</h1>

            {{ csrf_field() }}

        <div class="txtb {{ $errors->has('email') ? ' has-error ': ''}}">
          <input type="text">
          <span data-placeholder="Email Address" value="{{ old('email') }}"></span>
        @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
        @endif
        </div>


        <div class="txtb {{ $errors->has('password') ? ' has-error ': ''}}">
          <input type="password">
          <span data-placeholder="Password" value="{{ old('password') }}"></span>
        @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
        @endif
        </div>
        <input type="submit" id="a1" class="logbtn" value="Đăng Nhập">
        <a id="a1" class="qmkbtn" href="{{route('password.request')}}">Quên Mật Khẩu?</a>
        <a class="qmkbtn" id="a1" href="{{route('register')}}" class="text-center">Register a new membership</a>

      </form> -->
  <div>
    
    <form action="{{route('login')}}" method="post" class="login-form">
    <div>
        <h1>ĐĂNG NHẬP</h1>
    </div>
  <!-- /.login-logo -->
    <div>
      {{ csrf_field() }}
       <div class="txtb {{ $errors->has('email') ? ' has-error ': ''}}">
        <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}">
            <span data-placeholder="Email Address"></span>
        @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
        @endif
      </div>
      <div class="txtb {{ $errors->has('password') ? ' has-error ': ''}}">
        <input id="password" value="{{ old('password') }}" type="password" name="password" class="form-control">
        <span data-placeholder="Password"></span>
        @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
        @endif

      </div>
        <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="{{ old('remember') ? 'checked' : '' }}"> Ghi Nhớ Tài Khoản
            </label>
          </div>

        <!-- /.col -->
        <div class="logbtn">
          <button  type="submit" class="logbtn"><b>Đăng Nhập</b></button>
        </div>

    </form>
    <!-- /.social-auth-links -->

    <a class="qmkbtn" id="a1" href="{{route('password.request')}}">Quên Mât Khẩu?</a><br>
    <a class="qmkbtn" id="a1" href="{{route('register')}}" class="text-center">Đăng Ký Thành Viên</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<!-- <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script> -->
<!-- iCheck -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>

</html>