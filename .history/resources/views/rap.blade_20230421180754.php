@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản Lý Rạp Chiếu Phim</h2>
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
                    <a href="{{URL::to('add-Rap')}}">
                        <button class="btn btn-success" style="margin-bottom: 15px;">Thêm Rạp Chiếu</button>
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
                        <th>ID Rạp</th>
                        <th>Tên Rạp</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($all_Rap as $key => $rap)
                    <tr>
                        <td>{{$rap->IDRap}}</td>
                        <td>{{$rap->TenRap}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection