@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản Lý Đơn đặt vé</h2>
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
                        <th>ID Đơn Đặt Vé</th>
                        <th>Tên Phim</th>
                        <th>Thể Loại</th>
                        <th>Tên Rạp</th>
                        <th>Suất Chiếu</th>
                        <th>Số Ghế</th>
                        <th>Hàng Ghế</th>
                        <th>Ngày Xem</th>


                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    @foreach($all_donDatVe as $key => $donDatVe)
                    <tr>
                        <td>{{$donDatVe->IDDonDatVe}} </td>
                        <td>{{$donDatVe->TenPhim}} </td>
                        <td>{{$donDatVe->TenTheLoai}} </td>
                        <td>{{$donDatVe->TenRap}} </td>
                        <td>{{$donDatVe->ThoiGian}} </td>
                        <td>{{$donDatVe->SoGhe}} </td>
                        <td>{{$donDatVe->HangGhe}} </td>
                        <td>{{$donDatVe->NgayXem}} </td>

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