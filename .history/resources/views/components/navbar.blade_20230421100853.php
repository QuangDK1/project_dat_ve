<div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block"
        style="z-index: 2000;position: fixed;width: 100%;background-color: #26272b">
        <div class="container-fluid">
            <!-- Navbar brand -->
            <div class="dropdown">
                <button class="btn btn-dark text-light bg-dark" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false"
                    style="margin-right: 20px;background: black;box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);">
                    <i class="fa-sharp fa-solid fa-bars fa-3x" style="color:#66CC00;"></i>
                </button>
                <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton1"
                    style="width: 300px;height: 300px;">
                    <li><a class="dropdown-item" href="{{ route('index') }}">TRANG CHỦ</a></li>
                    <li><a class="dropdown-item" href="#">LỊCH CHIẾU</a></li>
                    <li><a class="dropdown-item" href="#">HỆ THỐNG RẠP</a></li>
                    <li><a class="dropdown-item" href="#">KHUYỄN MÃI</a></li>
                    <li><a class="dropdown-item" href="#">TUYỂN DỤNG</a></li>
                    <li><a class="dropdown-item" href="#">VỀ CHÚNG TÔI</a></li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <button type="button" class="btn btn-muave" style="background: #66CC00;">
                            <a href="#"
                                style="font-weight: bold;color: white;text-decoration: none;font-size: 14px;padding: 8px;">MUA
                                VÉ</a>
                        </button>
                    </li>
                </ul>
                <ul class="navbar-nav list-inline">
                    {{-- <!-- Icons -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" rel="nofollow" target="_blank">
                            <i class="fab fa-youtube fa-xl"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" rel="nofollow" target="_blank">
                            <i class="fab fa-facebook-f fa-xl"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" rel="nofollow" target="_blank">
                            <i class="fab fa-twitter fa-xl"></i>
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <?php
                        $data_admin=Session::get('data_admin');
                        ?>
                        @if($data_admin=="")
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-dangnhap" data-bs-toggle="modal"
                            data-bs-target="#ModalForm"
                            style="font-weight: bold;color: white;text-decoration: none;font-size: 14px;padding: 6px 12px;margin-top: 5px;background: #66CC00">
                            ĐĂNG NHẬP
                        </button>
                    </li>
                    <<<<<<< HEAD @else <li class="nav-item">
                        <a class="nav-link"
                            style="font-weight: bold;color: white;text-decoration: none;font-size: 14px;padding: 6px 12px;margin-top: 5px;background: #66CC00">
                            Xin chào </a>
                        <a href="{{URL::to('/logout')}}" class="btn btn-dangnhap" class="nav-item">
                            <a class="nav-link"
                                style="font-weight: bold;color: white;text-decoration: none;font-size: 14px;padding: 6px 12px;margin-top: 5px;background: #66CC00">
                                Xin chào </a>
                            <a href="{{URL::to('/logout')}}" class="btn btn-dangnhap">>>>>>>
                                ed87dfc7375bcafdd0d6a89d3e233bcbca9d1293
                                style="font-weight: bold;color: white;text-decoration: none;font-size: 14px;padding: 6px
                                12px;margin-top: 5px;background: #66CC00">
                                ĐĂNG XUẤT
                            </a>
                            @endif
                            <x-login />

                            </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
</div>