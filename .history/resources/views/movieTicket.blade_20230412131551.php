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
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Quản Lý Vé</h2>
            </div>
            <div class="panel-body">
                <a href="{{ route('movieAddTicket') }}">
                    <button class="btn btn-success" style="margin-bottom: 15px;">Thêm Vé</button>
                </a>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID Vé</th>
                            <th>ID Phim</th>
                            <th>Tên phim</th>
                            <th>Loại phim</th>
                            <th>Xuất chiếu</th>
                            <th>Giờ chiếu</th>
                            <th>Số lượng vé</th>
                            <th>Ngày Thêm</th>
                            <th width="50px"></th>
                            <th width="50px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> </td>
                            <td><img src=" " style="max-width: 100px" /></td>
                            <td style="text-transform: capitalize;"></td>
                            <td> </td>
                            <td> </td>
                            <td style="text-transform: capitalize"> </td>
                            <td> </td>

                            <td> </td>

                            <td>
                                <a href=" "><button class="btn btn-warning">Sửa</button></a>
                            </td>
                            <td>
                                <button class="btn btn-danger">Xoá</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>