@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản Lý Đơn đặt vé</h2>
        </div>

        <div class="panel-body">

            <table class="table table-bordered table-hover" style="text-align: center;">
                <thead>
                    <tr>
                        <th>ID Đơn Đặt Vé</th>
                        <th>Tên Phim</th>
                        <th>Thể Loại</th>
                        <th>Tên Rạp</th>
                        <th>Tên Khách Hàng</th>
                        <th>Suất Chiếu</th>
                        <th>Ngày Xem</th>
                        <th>Tổng ghế</th>
                        <th>Tổng Gía</th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    @foreach($all_donDatVe as $key => $donDatVe)
                    <tr>
                        <td>{{$donDatVe->IDDonDatVe}} </td>
                        <td>{{$donDatVe->TenPhim}} </td>
                        <td>{{$donDatVe->TenTheLoai}} </td>
                        <td>{{$donDatVe->TenRap}} </td>
                        <td>{{$donDatVe->TenKH}} </td>
                        <td>{{$donDatVe->ThoiGian}} </td>
                        <td>{{$donDatVe->NgayXem}} </td>
                        <td>{{$donDatVe->count}} </td>
                        <td>{{$donDatVe->total}} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection