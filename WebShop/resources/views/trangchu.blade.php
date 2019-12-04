<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="{{asset('css/trangchu.css')}}">
</head>
<body>
    <header>
        <div class="box100pt bgyellow">
            <div class="boxcenter">
                <div class="logo">
                    <img src="img/chottot.jpg">
                </div>
<!--                    <div class="logo"><img src="img/chotot.jpg"></div> -->
                <a href="#"><button><b>ĐĂNG TIN</b></button></a>
                <a href="#">Tôi Bán</a>
                <a href="#">Thông Báo</a>
                <a href="#">Tìm rao vặt</a>
            </div>
        </div>
    </header>
    <div class="boxcenter">
        <div class="box100pt">
            <div id="container">
                <img class="slides" src="img/buyer.jpg">
                <img class="slides" src="img/buyer1.jpg">
                <img class="slides" src="img/buyer2.jpg">
                <button class="btn" onclick="plusIndex(-1)" id="btn1">&#10094</button>
                <button class="btn" onclick="plusIndex(1)" id="btn2">&#10095</button>
            </div>
        </div>
    </div>
    <div class="boxcenter">
        <div class="box100pt">
            <br>
            <h4 href="">Đăng nhập để không bỏ lỡ món hời giá tốt!</h4>
            <p style="text-align: center;">
<!--                 <button id="dn" ><a href="{{ route('login') }}">ĐĂNG NHẬP NGAY</a></button>

                <button id="dn"><a herf="{{ route('register') }}"> ĐĂNG KÝ TÀI KHOẢN</a></button> -->
                    @if (Route::has('login'))
                        <button id="dn"><a href="{{ route('login') }}" id="dnhap"><b>ĐĂNG NHẬP NGAY !!!</b></a></button>
                            @if (Route::has('register'))
                                <button id="dn"><a href="{{ route('register') }}" id="dnhap"><b>ĐĂNG KÝ TÀI KHOẢN</b></a></button>
                            @endif
                    @endif
            </p><br>
        </div>
        <div class="box100pt">
            <div class="banner1 mr">
                <div class="overplay"></div>
                <div class="title">
                    <p href="">Bất Động Sản</p>
                </div>
                <img src="img/vincyty.jpg" alt="">
            </div>
            <div class="boxnews mr">
                <div class="overplay"></div>
                <div class="title">
                    <p href="">Xe Cộ</p>
                </div>
                <img src="img/xeco.jpg" alt="">
            </div>
            <div class="boxnews ">
                <div class="overplay"></div>
                <div class="title">
                    <p href="">Thời Trang</p>
                </div>
                <img src="img/thoitrang1.jpg" alt="">
            </div>
            <div class="boxnews mr">
                <div class="overplay"></div>
                <div class="title">
                    <p href="">Các Loại Khác</p>
                </div>
                <img src="img/cupcakes.jpg" alt="">
            </div>
            <div class="boxnews ">
                <div class="overplay"></div>
                <div class="title">
                    <p href="">Thú Cưng</p>
                </div>
                <img src="img/thucung2.png" alt="">
            </div>
        </div>
    </div>

</body>
    <script>
        var index = 1;
        function plusIndex(n){
            index = index + 1;
            showImage(index);
        }

        showImage(1);

        function showImage(n){
            var i;
            var x = document.getElementsByClassName("slides");
            if(n > x.length){index = 1};
            if(n < 1){index = x.length};
            for(i = 0; i < x.length; i++){
                x[i].style.display = "none";
            }
            x[index-1].style.display = "block";
        }
    </script>
</html>