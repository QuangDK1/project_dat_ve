@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Cập nhật suất chiếu</h2>
        </div>
        <div class="panel-body">
            @foreach ($edit_Room as $key => $edit_value)
            <form method="post" action="{{URL::to('/update-Room ')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">

                    <label for="name">Suất Chiếu:</label>
                    <input type="text" name="IDPhongChieu" value="{{$edit_value->IDPhongChieu}} " hidden="true">

                    <input required="true" type="text" class="form-control" id=" " name="TenPhong"
                        value="{{$edit_value->TenPhong}} ">
                </div>
                <button name="add_Room" class="btn btn-success">Lưu</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection