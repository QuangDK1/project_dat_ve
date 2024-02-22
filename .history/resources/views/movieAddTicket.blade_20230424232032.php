@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thêm</h2>
        </div>
        <div class="panel-body">
            <form method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="name">Giá vé :</label>
                    <input type="text" name="id" value=" " hidden="true">
                    <input required="true" type="text" class="form-control" id="title" name="title" value=" ">
                </div>
                <div class="form-group">
                    <label for="name">Tên phim:</label>
                    <input type="text" name="id" value=" " hidden="true">
                    <input required="true" type="text" class="form-control" id="title" name="title" value=" ">
                </div>
                <div class="form-group">
                    <label for="name">Tên rạp:</label>
                    <input type="text" name="id" value=" " hidden="true">
                    <input required="true" type="text" class="form-control" id="title" name="title" value=" ">
                </div>

                <div class="form-group">
                    <label for="price">Chọn Thể loại:</label>
                    <select class="form-control" name="id_category" id="id_category">
                        <option>-- Loại vé --</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Xuất chiếu:</label>
                    <input type="text" name="id" value=" " hidden="true">
                    <input required="true" type="text" class="form-control" id="title" name="title" value=" ">
                </div>

                <button class="btn btn-success">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection