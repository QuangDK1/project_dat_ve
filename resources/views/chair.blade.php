@extends('dashboard')
@section('admin')
<div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Quản Lý Ghế</h2>
            </div>
            <?php
            $message =Session::get('message');
            if($message){
                echo $message;
                Session::put('message',null);
            }
            ?>
            <div class="panel-body">
                <a href="{{URL::to('add-Chair') }}">
                    <button class="btn btn-success" style="margin-bottom: 15px;">Thêm Ghế</button>
                </a>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID Ghế</th>
                            <th>Hàng Ghế</th>
                            <th>Số Ghế</th>
                            
                            <th width="50px"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($all_Chair as $key => $chair)
                        <tr>
                            <td>{{$chair->IDGhe}} </td>
                            <td>{{$chair->HangGhe}} </td>
                            <td>{{$chair->SoGhe}} </td>
                            <td>
                            <a href="{{URL::to('/delete-Chair/'.$chair->IDGhe)}}"><button
                                    class="btn btn-danger">Xoá</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection