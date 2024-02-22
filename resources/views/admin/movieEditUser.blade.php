@extends('dashboard')
@section('admin')
<div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Cập nhật Khách Hàng</h2>
            </div>
            <div class="panel-body">
            @foreach ($edit_User as $key => $edit_value)
                <form method="post"  action="{{URL::to('/update-User')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="IDKH" value="{{$edit_value->IDKH}}">
                    <div class="form-group">

                        <label for="name">Tên khách hàng:</label>
                       
                        <input required="true" name="TenKH" type="text" class="form-control" id="title"  value="{{ $edit_value->TenKH}}">
                    </div>

                    <div class="form-group">
                        <label for="name">Username:</label>
                       
                        <input required="true" name="Username" type="text" class="form-control" id="title"  value="{{ $edit_value->Username}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Password:</label>
                        
                        <input required="true" name="Password" type="text" class="form-control" id="title"  value="{{ $edit_value->Password}}">
                    </div>
                    <button type="submit" name="update_User" class="btn btn-success">Cập nhật</button>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
@endsection