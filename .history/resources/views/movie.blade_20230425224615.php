<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $movie['TenPhim'] }} - Cinema</title>
    @include('cdn')
    <style>
    .movie-info {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .movie-info span {
        font-size: 18px;

    }

    .movie-info li {
        padding-bottom: 15px;
        padding-top: 15px;
    }

    .movie-detail p {
        color: #a6b2c9 !important;
        font-size: 20px;
    }

    .movie-tittle a {
        color: white;
        text-decoration: none;
        font-weight: bold;
    }

    .movie-tittle a:hover {
        color: #60CC00;
    }
    </style>
</head>

<body>
    <header>
        <x-navbar />
    </header>
    <div class="container" style="padding-top: 100px;padding-bottom: 100px">
        <div class="movie-tittle" style="padding-bottom: 30px">
            <h3 style="font-weight: bold"><a href="{{ route('index') }}">TRANG CHỦ</a> | {{ $movie['TenPhim'] }}</h3>
        </div>
        <div class="row">
            <div class="movie-picture col-4">
                <img src="/images/{{ $movie['HinhAnh'] }}" alt="">

                <img src="/images/{{ $movie['HinhAnh'] }}" alt="" style="width: 100%">

            </div>
            <div class="movie-content col-8">
                <div class="movie-name">
                    <h3 style="font-weight: bold">{{ $movie['TenPhim'] }}</h3>
                </div>
                <div class="movie-detail">
                    <p>{{ $movie['Mota'] }}</p>
                </div>
                <ul class="movie-info">
                    <li>
                        <span class="col-left">Thể loại: </span>
                        @foreach ($theloais as $theloai) <span class="col-right">
                            @if ($theloai['IDTheLoai'] == $movie['IDTheLoai'])
                            {{ $theloai['TenTheLoai'] }}
                            @endif
                        </span>
                        @endforeach

                        @foreach ($theloais as $theloai)
                        <span class="col-right">
                            @if ($theloai['IDTheLoai'] == $movie['IDTheLoai'])
                            {{ $theloai['TenTheLoai'] }}
                            @endif
                            {{ $movie['TenTheLoai'] }}
                        </span>
                        @endforeach

                    </li>
                    <li>
                        <span class="col-left">Khởi chiếu: </span>
                        <span class="col-right">{{ $movie['KhoiChieu'] }}</span>
                    </li>
                    <li>
                        <span class="col-left">Thời lượng: </span>
                        <span class="col-right">{{ $movie['ThoiLuong'] }}</span>
                    </li>
                    <li>
                        <span class="col-left">
                            <button type="button" class="btn btn-muave" style="background: #66CC00;margin-right: 10px"
                                data-bs-toggle="collapse" data-bs-target="#trailer">
                                <a href="#"
                                    style="font-weight: bold;color: white;text-decoration: none;font-size: 14px;padding: 8px;">XEM
                                    TRAILER</a>
                            </button>
                        </span>
                        <span class="col-right">
                            <button type="button" class="btn btn-muave hover-bg-white" style="background: #66CC00;">
                                <a href="{{ route('ticket') }}"
                                    style="font-weight: bold;color: white;text-decoration: none;font-size: 14px;padding: 8px;">MUA
                                    VÉ</a>
                            </button>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container collapse" style="width: 90%" id="trailer">
        <div style="text-align: center">
            <h1>{{ $movie['TenPhim'] }}</h1>
        </div>
        <div class="ratio ratio-16x9">
            <iframe class="embed-responsive-item" src="{{ asset('trailer/' .$movie['Trailer']) }}" id="video"
                allowscriptaccess="always" sandbox></iframe>
        </div>
    </div>
    <x-event />
    <x-footer />
</body>

</html>