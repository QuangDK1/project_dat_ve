<style>
    .member-title {
        text-align: center;
        align-items: center;
        justify-content: center;
    }

    .member-inline li {
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .member-inline ul {
        margin-top: 60px;
        margin-bottom: 10px;
        justify-content: center;
        align-items: center;
        text-align: center;
        display: flex;
        justify-content: space-between;
        list-style: none;
    }

    .member-inline li img {
        width: 90%;
    }
</style>

<div class="container">
    <h3 class="member-title"><img src="{{ asset('images/membertittle.png') }}" alt=""
            style="width: 200px;margin-bottom: 60px"></h3>
    <div class="member-inline">
        <ul class="member-list">
            <li><a href=""><img src="{{ asset('images/member1.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/member2.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('images/member3.png') }}" alt=""></a></li>
        </ul>
    </div>
    <div class="container" style="text-align: center;padding-top: 50px;padding-bottom: 100px">
        <button type="button" class="btn btn-muave rounded-pill" style="background: #66CC00;">
            <a href="{{ route('dangky') }}"
                style="font-weight: bold;color: white;text-decoration: none;font-size: 20px;padding: 8px;">ĐĂNG KÝ
                NGAY</a>
        </button>
    </div>
</div>
