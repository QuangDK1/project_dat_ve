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

                        <td>{{$donDatVe->TenRap}} </td>
                        <td>{{$donDatVe->ThoiGian}} </td>
                        <td>{{$donDatVe->SoGhe}} </td>
                        <td>{{$donDatVe->HangGhe}} </td>
                        <td>{{$donDatVe->NgayXem}} </td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection