@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản Lý Suất Chiếu</h2>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <a href=" ">
                        <button class="btn btn-success" style="margin-bottom: 15px;">Thêm Suất Chiếu</button>
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
                        <th>ID Suất Chiếu</th>
                        <th>Thời gian</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_SuatChieu as $key => $suatchieu)
                    <tr>
                        <td>{{$suatchieu->IDSuatChieu}} </td>
                        <td>{{$suatchieu->TenSuatChieu}} </td>
                    </tr>
                    <td width="50px">
                        <a href="{{URL::to('/edit-Category/'.$category->IDTheLoai)}}"><button
                                class="btn btn-warning">Sửa</button></a>
                    </td>
                    <td width="50px">
                        <a href="{{URL::to('/delete-Category/'.$category->IDTheLoai)}}"><button
                                class="btn btn-danger">Xoá</button></a>
                    </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection