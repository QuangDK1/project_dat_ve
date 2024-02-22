<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema - Hệ thống rạp chiếu phim</title>
    @include('cdn')
</head>

<body>
    <?php
// Set the new timezone
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date(' H:i');
echo $date;
?>
    <!--Main Navigation-->
    <header>
        <x-navbar />
    </header>
    <x-slide />
    <div style="">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active rounded-pill" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                    aria-selected="true">PHIM ĐANG CHIẾU</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-pill" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                    aria-selected="false">PHIM SẮP CHIẾU</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="container" style="width: 90%">
                    <swiper-container class="mySwiper" slides-per-view="5" space-between="30" free-mode="true">
                        @foreach ($movies as $movie)
                        @if ($movie['NgayKhoiChieu'] <= Carbon\Carbon::today()) <swiper-slide class="product-slide">
                            <div class="card border-0" style="background-color: transparent !important;">
                                <a href="{{ route('movie', $movie['IDPhim']) }}" title="">
                                    <img src="{{ URL::to('images/'.$movie['HinhAnh']) }}" alt="..." />
                                </a>
                                <div class="card-body" style="height:120px">
                                    <div class="text-center">
                                        <a href="{{ route('movie', $movie['IDPhim']) }}" class="product-name">
                                            {{ $movie['TenPhim'] }}
                                        </a>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent border-top-0">
                                    <div class="align-self-end">
                                        <div class="align-self-end">
                                            <form method="get" action="" class="form-muave">
                                                <button class="btn btn-muave mt-auto"
                                                    style="width: 100%;border: 0;background: #66CC00;">
                                                    <a href="{{ route('movie', $movie['IDPhim']) }}"
                                                        style="color: white;font-weight: bold;text-decoration: none"><i
                                                            class="fa fa-ticket"></i> MUA VÉ</a>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </swiper-slide>
                            @endif
                            @endforeach
                    </swiper-container>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                <div class="container" style="width: 90%">
                    <swiper-container class="mySwiper" slides-per-view="5" space-between="30" free-mode="true">
                        @foreach ($movies as $movie)
                        @if ($movie['NgayKhoiChieu'] > Carbon\Carbon::today())
                        <swiper-slide class="product-slide">
                            <div class="card border-0" style="background-color: transparent !important;">
                                <a href="{{ route('movie', $movie['IDPhim']) }}" title="">
                                    <img src="images/{{ $movie['HinhAnh'] }}" alt="..." />
                                </a>
                                <div class="card-body" style="height:120px">
                                    <div class="text-center">
                                        <a href="{{ route('movie', $movie['IDPhim']) }}" class="product-name">
                                            {{ $movie['TenPhim'] }}
                                        </a>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent border-top-0">
                                    <div class="align-self-end">
                                        <div class="align-self-end">
                                            <form method="get" action="" class="form-muave">
                                                <button class="btn btn-muave mt-auto"
                                                    style="width: 100%;border: 0;background: #66CC00;">
                                                    <a href="{{ route('movie', $movie['IDPhim']) }}"
                                                        style="color: white;font-weight: bold;text-decoration: none"><i
                                                            class="fa fa-ticket"></i> MUA VÉ</a>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </swiper-slide>
                        @endif
                        @endforeach
                    </swiper-container>
                </div>
            </div>
        </div>
    </div>
    <x-member />
    <x-event />
    <x-footer />
</body>

</html>