<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{!! url('public/css/styleback.css')!!}">
    <meta charset="utf-8">
    <title>admin</title>
    <link rel="stylesheet" type="text/css" href="{!! url('public/css/slide.css')!!}">
    <script type="text/javascript" src="https:\\code.jquery.com\jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="{!! url('public/js/slide.js')!!}"></script>

</head>
<body>
    <div class="khoi">
    <img class="slide" src="{!! url('public/images/banner10.jpg')!!}" alt="caphe" width="100%" stt="0" />
    <img class="slide" src="{!! url('public/images/banner11.jpg')!!}" alt="caphe" width="100%"  stt="1" style="display: none;">
    <img class="slide" src="{!! url('public/images/banner3.jpg')!!}" alt="caphe" width="100%"  stt="2" style="display: none;">
    <img class="slide" src="{!! url('public/images/banner12.jpg')!!}" alt="caphe" width="100%"  stt="3" style="display: none;">
    <a href="javascript:void(0)" id="prev"><img src="{!! url('public/images/prev.png')!!}" width="150px" height="150px"></a>
    <a href="javascript:void(0)" id="next"><img src="{!! url('public/images/next.png')!!}" width="150px" height="150px"></a>
    </div>
    <div class="khoi">
        <h1>CHÀO MỪNG BẠN ĐẾN VỚI TRANG ADMIN CỦA TRẦN CÔNG TUYỂN </h1>
         <a href="{!! url('/') !!}" ><img id="hinh1" src="{!! url('public/images/home.png')!!}"></a>   
         <a href="{!! url('xem-san-pham')!!}"><img id="hinh2" src="{!! url('public/images/table.png')!!}"></a>
         <a href="{!! url('/home')!!}"><img id="hinh3" src="{!! url('public/images/shop.png')!!}"></a>
    </div>
    <div class="khoi">
         <ul class="">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
       
    </div>
</div>
</body>
</html>