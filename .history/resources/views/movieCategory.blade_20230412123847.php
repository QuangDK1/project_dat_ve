<!DOCTYPE html>
<html>

<head>
    <title>Quản Lý </title>
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
                <h2 class="text-center">Quản Lý Loại Phim</h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="{{ route('movieAddCategory') }}">
                            <button class="btn btn-success" style="margin-bottom: 15px;">Thêm Loại Phim</button>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <form method="get">
                            <div class="form-group" style="width: 200px; float: right;">
                                <input type="text" class="form-control" placeholder="Searching..." id="s" name="s">
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="50px">STT</th>
                            <th>Tên Loại</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td width="50px">
                                <a href=" "><button class="btn btn-warning">Sửa</button></a>
                            </td>
                            <td width="50px">
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