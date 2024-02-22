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
                <form method="post" action="{{URL::to('ThanhCong')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên Khách hàng:</label>
                        <input type="text" value=" " hidden="true">
                        <input required="true" name="TenKH" type="text" class="form-control" id="title" name="title"
                            value=" ">
                    </div>
                    <div class="form-group">
                        <label for="name">Email:</label>
                        <input type="text" value=" " hidden="true">
                        <input required="true" name="email" type="text" class="form-control" id="title" name="title"
                            value=" ">
                    </div>
                    <div class="form-group">
                        <label for="name">Hình Thức Thanh Toán:
                        </label>
                        <select name="thanhtoan" id="" class="form-control">
                            <option value=" ">Chọn hình thức thanh toán:</option>

                            <option name="momo" value="momo">Ví điện tử momo </option>
                            <option name="zalopay" value="zalopay">ZaloPay </option>
                            <option name="vnpay" value="vnpay">VNPay</option>
                            <option name="taiquay" value="taiquay">Thanh Toán Khi nhận vé</option>

                        </select>
                    </div>
                    <button class="btn btn-success">Thanh Toán</button>
                </form>
            </div>
        </div>
    </div>
    <x-event />
    <x-footer />
</body>

</html>