@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thêm Rạp Chiếu Phim</h2>
        </div>
        <div class="panel-body">
            <form method="post" action="{{URL::to('/save-Rap')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">

                    <label for="name">Tên Rạp:</label>
                    <input type="text" name="TenRap" value=" " hidden="true">

                    <input required="true" type="text" class="form-control" id=" " name="TenRap" value=" ">
                </div>
                <button name="add_Rap" class="btn btn-success">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection