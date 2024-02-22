@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản Lý Loại Phim</h2>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <a href="{{URL::to('add-Category') }}">
                        <button class="btn btn-success" style="margin-bottom: 15px;">Thêm Loại Phim</button>
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
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="70px">ID Loại</th>
                        <th>Tên Thể Loại</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_Category as $key => $category)
                    <tr>
                        <td>{{$category->IDTheLoai}} </td>
                        <td>{{$category->TenTheLoai}} </td>
                        <td width="50px">
                            <a href=" "><button class="btn btn-warning">Sửa</button></a>
                        </td>
                        <td width="50px">
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