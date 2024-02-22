@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thêm</h2>
        </div>
        <div class="panel-body">
            <form method="post" action="{{URL::to('/save-Ticket')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Giá vé :</label>
                    <input type="text" name="GiaVe" value=" " hidden="true">
                    <input required="true" type="text" class="form-control" id="title" name="title" value=" ">
                </div>
                <div class="form-group">
                    <label for="name">Tên Phim:</label>
                    <select name="TenPhim" id="" class="form-control">
                        <option value=" ">Chọn phim</option>
                        @foreach ( $Movie as $data)
                        <option value=" ">{{ $data->TenPhim }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Tên rạp:</label>
                    <input type="text" name="TenRap" value=" " hidden="true">
                    <input required="true" type="text" class="form-control" id="title" name="title" value=" ">
                </div>

                <div class="form-group">
                    <label for="name">Tên Thể Loại:</label>
                    <select name="TenTheLoai" id="" class="form-control">
                        <option value=" ">Chọn thể loại</option>
                        @foreach ( $Theloai as $data)
                        <option value=" ">{{ $data->TenTheLoai }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Xuất chiếu:</label>
                    @foreach ( $Suatchieu as $data)
                    <input type="checkbox" name="ThoiGian" value=" " hidden="true">
                    <input required="true" type="checkbox" class="form-control" id="title" name="title" value=" ">
                    <label>{{ $data->ThoiGian }}</label>

                    @endforeach
                </div>

                <button class="btn btn-success">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection