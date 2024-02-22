<!DOCTYPE html>
<html>

<head>
    <title>Thêm/Sửa Sản Phẩm</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- summernote -->
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
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
                <h2 class="text-center">Thêm/Sửa Sản Phẩm</h2>
            </div>
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Tên Sản Phẩm:</label>
                        <input type="text" name="id" value=" " hidden="true">
                        <input required="true" type="text" class="form-control" id="title" name="title" value=" ">
                    </div>
                    <div class="form-group">
                        <label for="price">Chọn Danh Mục:</label>
                        <select class="form-control" name="id_category" id="id_category">
                            <option>-- Lụa chọn danh mục --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Tình Trạng:</label>
                        <input style="text-transform: capitalize" class="form-control" name="status" id="status"
                            value=" "></input>
                    </div>
                    <div class="form-group">
                        <label for="price">Giá Bán:</label>
                        <input required="true" type="number" class="form-control" id="price" name="price" value=" ">
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Ảnh bìa:</label>
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                    </div>

                    <tr>
                        <td align="right" class="ver-top"><label>Ảnh Kèm Theo:</label></td>
                        <td colspan="3">
                            <input id="album" class="form-control file" type="file" name="images[]"
                                data-max-file-count="15" accept="image/*" multiple="multiple">
                        </td>
                    </tr>

                    <div class="form-group">
                        <label for="content">Nội Dung:</label>
                        <textarea class="form-control" rows="5" name="content" id="content"></textarea>
                    </div>
                    <button class="btn btn-success">Lưu</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>