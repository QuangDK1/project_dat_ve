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
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Tên phim:</label>
                        <div class="movie-name">
                            {{ $movie['TenPhim'] }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Tên Thể Loại:</label>
                        <select name="TenTheLoai" id="" class="form-control">


                            <option value=" ">Chọn thể loại</option>
                            @foreach ( $Theloai as $data)
                            <option value="{{ $data->TenTheLoai }}">{{ $data->TenTheLoai }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name">Phòng chiếu:</label>
                        <select class="form-control" name="id_category" id="id_category">
                            <option>-- Chọn phòng chiếu --</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="price">Ghế:</label>
                        <select class="form-control" name="id_category" id="id_category">
                            <option>-- Chọn ghế --</option>
                        </select>
                    </div>
                    <button class="btn btn-success">Đặt vé</button>
                </form>
            </div>
        </div>
    </div>
    <x-event />
    <x-footer />
</body>

</html>