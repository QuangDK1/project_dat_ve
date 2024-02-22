<!DOCTYPE html>
<html>

<head>
    <title> a</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>

    </style>
</head>

<body style="font-weight: 600;">
    <?php
	        $data_admin=Session::get('data_admin');
	
	        ?>
    <div>
        <ul class=" nav nav-tabs row" style="text-align: center;    ">
            <li class="nav-item col-lg-2">
                <a class="nav-link  " href="{{ route('movieAdmin') }}">Trang chủ</a>
            </li>
            <li class="nav-item col-lg-8">

                <a class="nav-link" style="color: red;text-align: center;">Xin chào </a>
            </li>

            <li class="nav-item  col-lg-2 " style="text-align: center;">
                <a class="nav-link" href="{{URL::to('/logout')}}">Đăng Xuất</a>
            </li>
        </ul>
        <ul class="nav nav-tabs row" style="text-align: center;">
            <li class="nav-item col-md-3">
                <a class="nav-link  " href="{{ route('movieCategory') }}">Quản Lý Loại Phim</a>
            </li>
            <li class="nav-item col-md-3">
                <a class="nav-link " href="{{ route('movieMovie') }}">Quản Lý Phim</a>
            </li>
            <li class="nav-item col-md-3">
                <a class="nav-link " href="{{ route('movieUser') }}"> Quản Lí Người Dùng</a>
            </li>
            <li class="nav-item col-md-3">
                <a class="nav-link " href="{{ route('movieTicket') }}"> Quản Lí Vé</a>
            </li>
            <li class="nav-item col-md-3">
                <a class="nav-link " href="{{ route('chair') }}"> Quản Lí Ghế</a>
            </li>
            <li class="nav-item col-md-3">
                <a class="nav-link " href="{{ route('rap') }}"> Quản Lí Rạp</a>
            </li>

        </ul>
    </div>
    @yield('admin')
</body>

</html>