<!DOCTYPE html>
<html>

<head>
    <title>Quản Lý Danh Mục</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div>
        <ul class="nav nav-tabs row">
            <li class="nav-item col-md-5">
                <a class="nav-link  " href="{{ route('movieAdmin') }}">xin chào</a>
            </li>

            <li class="nav-item  col-md-6 d-flex" style="">

                <a class="nav-link" href="">Đăng Xuất</a>
            </li>
        </ul>
        <ul class="nav nav-tabs row">
            <li class="nav-item col-md-2">
                <a class="nav-link  " href="{{ route('movieCategory') }}">Quản Lý Loại Phim</a>
            </li>
            <li class="nav-item col-md-2">
                <a class="nav-link " href="">Quản Lý Phim</a>
            </li>
            <li class="nav-item col-md-2">
                <a class="nav-link " href=""> Quản Lí Người Dùng</a>
            </li>
            <li class="nav-item col-md-2">
                <a class="nav-link " href="{{ route('movieTicket') }}"> Quản Lí Vé</a>
            </li>

        </ul>
    </div>
</body>

</html>