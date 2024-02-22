@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Cập nhật suất chiếu</h2>
        </div>
        <div class="panel-body">
            @foreach ($edit_SuatChieu as $key => $edit_value)
            <form method="post" action="{{URL::to('/update-SuatChieu')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">

                    <label for="name">Suất Chiếu:</label>
                    <input type="text" name="IDSuatChieu" value="{{$edit_value->IDSuatChieu}} " hidden="true">

                    <input required="true" type="text" class="form-control" id=" " name="ThoiGian"
                        value="{{$edit_value->ThoiGian}} ">
                </div>
                <button name="add_SuatChieu" class="btn btn-success">Lưu</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection