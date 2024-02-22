@extends('dashboard')
@section('admin')
<div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Thêm Khách Hàng</h2>
            </div>
            <div class="panel-body">
                <form method="post"  action="{{URL::to('/save-User')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên khách hàng:</label>
                       
                        <input required="true" name="TenKH" type="text" class="form-control" id="title" name="title" value="Phan Ngọc Sơn">
                    </div>

                    <div class="form-group">
                        <label for="name">Username:</label>
                       
                        <input required="true" name="Username" type="text" class="form-control" id="title" name="title" value="son073">
                    </div>
                    <div class="form-group">
                        <label for="name">Password:</label>
                        
                        <input required="true" name="Password" type="text" class="form-control" id="title" name="title" value="************">
                    </div>
                    <button type="submit" name="add_User" class="btn btn-success">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection