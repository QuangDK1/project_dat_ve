@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thêm phòng chiếu Phim</h2>
        </div>
        <div class="panel-body">
            <form method="post" action="{{URL::to('/save-Room')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">

                    <label for="name">Phòng chiếu:</label>
                    <input type="text" name="IDPhongChieu" value=" " hidden="true">

                    <input required="true" type="text" class="form-control" id=" " name="TenPhong" value=" ">
                </div>
                <button name="add_Room" class="btn btn-success">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection