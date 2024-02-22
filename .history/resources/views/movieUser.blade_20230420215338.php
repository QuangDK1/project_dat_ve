@extends('dashboard')
@section('admin')
<div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Quản Lý Người Dùng</h2>
            </div>
            <div class="panel-heading" style="color:red;font-weight:500">
            <?php
            $message =Session::get('message');
            if($message){
                echo $message;
                Session::put('message',null);
            }
            ?>
            </div>
           
            <div class="panel-body">
                
                <a href="{{URL::to('add-User') }}">
                    <button class="btn btn-success" style="margin-bottom: 15px;">Thêm User</button>
                </a>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên Khách Hàng</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($all_User as $key => $user)
                    
                        <tr>
                            <td>{{$user->IDKH}}</td>
                            <td>{{$user->TenKH}}</td>
                            <td>{{$user->Username}} </td>
                            <td>{{$user->Password}} </td>
                            <td>
                                <a href="{{URL::to('/edit-User/'.$user->IDKH)}}"><button class="btn btn-warning">Sửa</button></a>
                            </td>
                            <td>
                                <a href="{{URL::to('/delete-User/'.$user->IDKH)}}"><button class="btn btn-danger">Xoá</button></a>
                            </td>
                        </tr>
                       
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection