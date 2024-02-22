<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema</title>
    @include('cdn')
</head>

<body>
    <header>
        <x-navbar />
    </header>
    <div class="container" style="padding-top: 100px;padding-bottom: 100px">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">ĐẶT VÉ</h2>
            </div>
            <div class="panel-body">
                <form method="post" action="{{URL::to('ThanhCong')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên phim:</label>
                        <div class="movie-name" name="TenPhim">
                            {{ $movie['TenPhim'] }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Tên Thể Loại:
                        </label>
                        <div class="TenTheLoai" name="TenTheLoai">
                            {{ $movie['TenTheLoai'] }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Chọn Rạp Chiếu:</label>
                        <select name="TenRap" id="" class="form-control">
                            <option value=" ">Chọn Rạp Chiếu</option>
                            @foreach ( $Rap as $data)
                            <option value="{{ $data->TenRap }}">{{ $data->TenRap }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Chọn suất Chiếu:</label>
                        <select name="ThoiGian" id="" class="form-control">
                            <option value=" ">Chọn suất chiếu Chiếu</option>
                            @foreach ( $Suatchieu as $data)
                            <option value="{{ $data->ThoiGian }}">{{ $data->ThoiGian }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name">Chọn Số Ghế:</label>
                        <select name="SoGhe" id="" class="form-control">
                            <option value=" ">Chọn Số Ghế:</option>
                            @foreach ( $Ghe as $data)
                            <option value="{{ $data->SoGhe }}">{{ $data->SoGhe }}</option>
                            @endforeach
                        </select>
                        <label for="name">Chọn Hàng Ghế:</label>
                        <select name="HangGhe" id="" class="form-control">
                            <option value=" ">Chọn Hàng Ghế:</option>
                            @foreach ( $Ghe as $data)
                            <option value="{{ $data->HangGhe }}">{{ $data->HangGhe }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" form-group">
                        <label for="name">Ngày Xem:</label>

                        <input required="true" name="NgayXem" type="date" class="form-control" id="title" name="title"
                            value=" ">
                    </div>



                    <button type="submit" class="btn btn-success" name="insert_Ve">Đặt vé</button>

                </form>
            </div>
        </div>
    </div>
    <x-event />
    <x-footer />
</body>

</html>