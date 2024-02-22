<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema</title>
    @include('cdn')
    <style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat&display=swap");

    @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");

    /* body {
            font-family: "Montserrat", sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #242333;
            color: #fff;
            margin: 0;
        }

        * {
            font-family: "Montserrat", sans-serif !important;
            box-sizing: border-box;
        } */

    .movie-container {
        margin: 20px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column
    }

    .movie-container select {
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        border: 0;
        padding: 5px 15px;
        margin-bottom: 40px;
        font-size: 14px;
        border-radius: 5px;
    }

    .movieSeat {
        perspective: 1000px;
        margin: 40px 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .seat {
        background-color: #444451;
        height: 24px;
        width: 28px;
        margin: 3px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .selected {
        background-color: #0081cb;
    }

    .occupied {
        background-color: #fff;
    }

    .seat:nth-of-type(2) {
        margin-right: 18px;
    }

    .seat:nth-last-of-type(2) {
        margin-left: 18px;
    }

    .seat:not(.occupied):hover {
        cursor: pointer;
        transform: scale(1.2);
    }

    .showcase .seat:not(.occupied):hover {
        cursor: default;
        transform: scale(1);
    }

    .showcase {
        display: flex;
        justify-content: space-between;
        list-style-type: none;
        background: rgba(0, 0, 0, 0.1);
        padding: 5px 10px;
        border-radius: 5px;
        color: #777;
    }

    .showcase li {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 10px;
    }

    .showcase li small {
        margin-left: 2px;
    }

    .row {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .screen {
        background: #fff;
        height: 90px;
        width: 30%;
        margin: 15px 0;
        transform: rotateX(-45deg);
        box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
    }

    p.text {
        margin: 40px 0;
    }

    p.text span {
        color: #0081cb;
        font-weight: 600;
        box-sizing: content-box;
    }

    .credits a {
        color: #fff;
    }
    </style>
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
                <form method="post" action="{{ URL::to('dondatve') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên phim:</label>

                        <input required="true" name="TenPhim" type="text" class="form-control" id="title" name="title"
                            value="{{ $movie->TenPhim }} ">
                    </div>

                    <div class="form-group">
                        <label for="name">Tên Thể Loại:
                        </label>

                        <input required="true" name="TenTheLoai" type="text" class="form-control" id="title"
                            name="title" value="{{ $movie->TenTheLoai }} ">
                    </div>
                    <div class="form-group">
                        <label for="name">Giá:
                        </label>
                        <div class="TenTheLoai" name="TenTheLoai">
                            {{number_format($movie->Gia).' '.'VNĐ' }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên khách hàng:</label>
                        <input type="text" value=" " hidden="true">
                        <input required="true" name="TenKH" type="text" class="form-control" id="title" name="title"
                            value=" ">
                    </div>
                    <div class="form-group">
                        <label for="name">Chọn Rạp Chiếu:</label>
                        <select name="TenRap" id="" class="form-control">
                            <option value=" ">Chọn Rạp Chiếu</option>
                            @foreach ($Rap as $data)
                            <option value="{{ $data->TenRap }}">{{ $data->TenRap }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" form-group">
                        <label for="name">Ngày Xem:</label>
                        <input required="true" name="NgayXem" type="date" class="form-control" id="title" name="title"
                            value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Chọn suất Chiếu:</label>
                        <select name="ThoiGian" id="" class="form-control">
                            <option value="">Chọn suất chiếu</option>
                            <?php
    // Set the new timezone
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $current_time = time();
    ?>

                            @foreach ($Suatchieu as $data )
                            <?php
        // Convert the ThoiGian value to a timestamp
        $suatchieu_time = strtotime($data->ThoiGian);
        ?>

                            @if($suatchieu_time > $current_time)
                            <option value="{{ $data->ThoiGian }}">{{ $data->ThoiGian }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    {{-- Rap --}}
                    <div class="movie-container">
                        {{-- Phai them bang gia ve --}}
                        {{-- <input id="movie" value="{{ $movie['Gia'] }}" type="hidden"> --}}
                        <input id="movie" value="{{ $movie['Gia'] }}" type="hidden">

                        <ul class="showcase">
                            <li>
                                <div class="seat"></div>
                                <small>Trống</small>
                            </li>
                            <li>
                                <div class="seat selected"></div>
                                <small>Đang chọn</small>
                            </li>
                            <li>
                                <div class="seat occupied"></div>
                                <small>Đã đặt</small>
                            </li>
                        </ul>

                        <div class="movieSeat container">
                            <div class="screen"></div>

                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>

                            <p class="text">
                                Bạn đang chọn <span id="count" name="count">0</span> ghế với tổng giá.
                                <span id="total" name="total">0</span>
                            </p>
                        </div>
                    </div>
                    {{-- Rap --}}


                    <button type="submit" class="btn btn-success" name="insert_Ve">Đặt vé</button>

                </form>
            </div>
        </div>
    </div>
    <x-event />
    <x-footer />
    <script>
    const container = document.querySelector('.container');
    const seats = document.querySelectorAll('.row .seat:not(.occupied)');
    const count = document.getElementById('count');
    const total = document.getElementById('total');
    const movieSelect = document.getElementById('movie');

    let ticketPrice = +movieSelect.value.value.toLocaleString('vi', {
        style: 'currency',
        currency: 'VND'
    });

    //Update total and count
    function updateSelectedCount() {
        const selectedSeats = document.querySelectorAll('.row .seat.selected');
        const selectedSeatsCount = selectedSeats.length;
        count.innerText = selectedSeatsCount;
        total.innerText = selectedSeatsCount * ticketPrice;
    }

    //Movie Select Event
    movieSelect.addEventListener('change', e => {
        ticketPrice = +e.target.value.toLocaleString('vi', {
            style: 'currency',
            currency: 'VND'
        });
        updateSelectedCount();
    });

    //Seat click event
    container.addEventListener('click', e => {
        if (e.target.classList.contains('seat') &&
            !e.target.classList.contains('occupied')) {
            e.target.classList.toggle('selected');
        }
        updateSelectedCount();
    });
    </script>
</body>

</html>