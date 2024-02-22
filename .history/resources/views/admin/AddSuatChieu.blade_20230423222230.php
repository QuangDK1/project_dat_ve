@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thêm suất chiếu Phim</h2>
        </div>
        <div class="panel-body">
            <form method="post" action="{{URL::to('/save-SuatChieu')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">

                    <label for="name">Suất chiếu:</label>
                    <input type="text" name="IDSuatChieu" value=" " hidden="true">

                    <input required="true" type="text" class="form-control" id=" " name="TenSuatChieu" value=" ">
                </div>
                <button name="add_SuatChieu" class="btn btn-success">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection