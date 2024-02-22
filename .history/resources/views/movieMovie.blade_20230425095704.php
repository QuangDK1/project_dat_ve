@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản Lý Phim</h2>
        </div>
        <?php
            $message =Session::get('message');
            if($message){
                echo $message;
                Session::put('message',null);
            }
            ?>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <a href="{{URL::to('add-Movie')}}">
                        <button class="btn btn-success" style="margin-bottom: 15px;">Thêm Phim</button>
                    </a>
                </div>
                <div class="col-lg-6">
                    <form method="get">
                        <div class="form-group" style="width: 200px; float: right;">
                            <input type="text" class="form-control" placeholder="Searching..." id="s" name="s">
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-bordered table-hover" style="text-align: center;">
                <thead>
                    <tr>
                        <th>ID Phim</th>
                        <th>Tên Phim</th>
                        <th>Thể Loại</th>
                        <th>Thời Lượng</th>
                        <th>Giá vé</th>
                        <th>Ngày Khởi Chiếu</th>
                        <th>Mô Tả</th>
                        <th>Hình Ảnh</th>


                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    @foreach($all_Movie as $key => $movie)
                    <tr>
                        <td>{{$movie->IDPhim}} </td>
                        <td>{{$movie->TenPhim}} </td>
                        <td>{{$movie->TenTheLoai}} </td>
                        <td>{{$movie->ThoiLuong}} </td>
                        <td> {{$movie->GiaVe}}VND </td>
                        <td>{{$movie->NgayKhoiChieu}} </td>
                        <td>{{$movie->Mota}} </td>
                        <td><img style="max-width: 300px; height: auto;" src="{{ URL::to('images/'.$movie->HinhAnh)}}"
                                alt=""> </td>
                        <td width="50px">
                            <a href="  "><button class="btn btn-warning">Sửa</button></a>
                        </td>
                        <td width="50px">
                            <a href=" "><button class="btn btn-danger">Xoá</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection