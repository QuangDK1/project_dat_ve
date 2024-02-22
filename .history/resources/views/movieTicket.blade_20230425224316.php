@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản Lý Vé</h2>
        </div>
        <div class="panel-body">
            <a href="{{URL::to('add-Ticket')}}">
                <button class="btn btn-success" style="margin-bottom: 15px;">Thêm Vé</button>
            </a>
            <table class="table table-bordered table-hover" style="text-align: center;">
                <thead>
                    <tr>
                        <th>ID Vé</th>
                        <th>Tên phim</th>
                        <th>Thể loại</th>
                        <th>Giá vé</th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    @foreach($all_Ticket as $key => $ticket)
                    <tr>
                        <td>{{$ticket->IDVe}} </td>
                        <td>{{$ticket->TenPhim}} </td>
                        <td>{{$ticket->TenTheLoai}} </td>
                        <td>{{$ticket->GiaVe }} </td>


                        <td>
                            <a href=" "><button class="btn btn-warning">Sửa</button></a>
                        </td>
                        <td>
                            <button class="btn btn-danger">Xoá</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection