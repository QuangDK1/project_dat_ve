@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thêm Phim</h2>
        </div>
        <div class="panel-body">
            <form method="post" action="{{URL::to('/save-Movie')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">ID Phim:</label>

                    <input required="true" name="IDPhim" type="text" class="form-control" id="title" name="title"
                        value=" ">
                </div>

                <div class="form-group">
                    <label for="name">ID Thể Loại:</label>

                    <input required="true" name="IDTheLoai" type="text" class="form-control" id="title" name="title"
                        value=" ">
                </div>
                <div class="form-group">
                    <label for="name">Tên Phim:</label>

                    <input required="true" name="TenPhim" type="text" class="form-control" id="title" name="title"
                        value=" ">
                </div>
                <div class="form-group">
                    <label for="name">Thời Lượng:</label>

                    <input required="true" name="ThoiLuong" type="text" class="form-control" id="title" name="title"
                        value=" ">
                </div>
                <div class="form-group">
                    <label for="name">Mô Tả:</label>

                    <input required="true" name="ThoiLuong" type="text" class="form-control" id="title" name="title"
                        value=" ">
                </div>
                <div class="">

                    <label>Ảnh Kèm Theo:</label>

                    <input id="album" class="form-control file" type="file" name="images[]" data-max-file-count="15"
                        accept="image/*" multiple="multiple">


                </div>
                <button type="submit" name="add_Movie" class="btn btn-success">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection