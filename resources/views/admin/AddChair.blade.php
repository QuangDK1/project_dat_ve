@extends('dashboard')
@section('admin')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Thêm Ghế</h2>
            </div>
            <div class="panel-body">
                <form method="post" action="{{URL::to('/save-Chair')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Hàng Ghế:</label>
                        <input type="text"  value=" " hidden="true">
                        <input required="true" name="HangGhe" type="text" class="form-control" id="title" name="title" value=" ">
                    </div>
                    <div class="form-group">
                        <label for="name">Số Ghế:</label>
                        <input type="text"  value=" " hidden="true">
                        <input required="true" name="SoGhe"type="text" class="form-control" id="title" name="title" value=" ">
                    </div>
                    <button name="add_Chair" class="btn btn-success">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection