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
                <h2 class="text-center">ThanhToan</h2>
            </div>
            <div class="panel-body">
                <form method="post" action="{{URL::to('index')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên Khách hàng:</label>
                        <div class="movie-name" name="TenPhim">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Email:
                        </label>
                        <div class="TenTheLoai" name="TenTheLoai">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Hình Thức Thanh Toán:
                        </label>
                        <div class="TenTheLoai" name="TenTheLoai">

                        </div>
                    </div>




                    <button class="btn btn-success">Đặt vé</button>


                    <button type="submit" class="btn btn-success" name="insert_Ve">Đặt vé</button>

                </form>
            </div>
        </div>
    </div>
    <x-event />
    <x-footer />
</body>

</html>