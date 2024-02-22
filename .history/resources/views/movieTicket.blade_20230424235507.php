@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản Lý Vé</h2>
        </div>
        <div class="panel-body">
            <a href="{{URL::to('add-Tiket')}}">
                <button class="btn btn-success" style="margin-bottom: 15px;">Thêm Vé</button>
            </a>
            <table class="table table-bordered table-hover" style="text-align: center;">
                <thead>
                    <tr>
                        <th>ID Vé</th>
                        <th>Giá vé</th>
                        <th>Tên phim</th>
                        <th>Tên Rạp</th>
                        <th>Thể loại</th>
                        <th>Xuất chiếu</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>

                        <td>
                            <a href=" "><button class="btn btn-warning">Sửa</button></a>
                        </td>
                        <td>
                            <button class="btn btn-danger">Xoá</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection