<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ĐĂNG NHẬP</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <div class="box100pt bgyellow">
            <div class="boxcenter">
                <div class="logo">
                    <img src="img/chottot.jpg" alt="trangchu">
                </div>
                <a href="#"><button><b>ĐĂNG TIN</b></button></a>
                <a href="#">Tôi Bán</a>
                <a href="#">Thông Báo</a>
                <a href="#">Tìm rao vặt</a>
            </div>
        </div>
    </header>
    <form method="POST" class="rgtform" action="{{ route('register') }}">
        <h3>ĐĂNG KÝ</h3><br><br>
        @csrf
        <div class="txtb">
                <div>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
        </div>

        <div class="form-group row">
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail Address" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
        </div>
        <div class="form-group row">
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
        </div>
        <div class="form-group row">
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                </div>
        </div><br><br>
        <div class="rgtbtn">
            <button type="submit" class="btn btn-primary">
                {{ __('ĐĂNG KÝ') }}
            </button>
        </div>
    </form>

</body>
</html>