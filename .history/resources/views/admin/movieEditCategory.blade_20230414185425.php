@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thêm/Sửa Loại Phim</h2>
        </div>
        <div class="panel-body">
            @foreach ($edit_Category as $key => $edit_value)
            <form method="post" action="{{URL::to('/update-Category')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">

                    <label for="name">Tên Loại:</label>
                    <input type="text" name="IDTheLoai" value="{{$edit_value->IDTheLoai}} " hidden="true">

                    <input required="true" type="text" class="form-control" id=" " name="TenTheLoai"
                        value="{{$edit_value->TenTheLoai}} ">
                </div>
                <button name="add_Category" class="btn btn-success">Lưu</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection