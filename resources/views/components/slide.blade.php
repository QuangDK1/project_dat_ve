<style>
    swiper-slide {
        text-align: center;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    swiper-slide a img {
        display: block;
        object-fit: cover;
        width: 100%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
    }

    swiper-slide a {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<div class="" style="padding-top: 100px;display: flex">
    <img src="{{ asset('images/quangcao.jpg') }}" alt="" style="width: 10%;margin-left: 20px">
    <swiper-container class="mySwiper shadow-lg" navigation="true"
        autoplay-delay="4000" autoplay-disable-on-interaction="false" loop="true" style="--swiper-navigation-color: white; --swiper-pagination-color: white;width: 75%;
        height: 70%;border-radius: 50px">
        <swiper-slide><a href=""><img src="{{ asset('images/hinh1.jpg') }}"
                    alt="" ></a></swiper-slide>
        <swiper-slide><a href=""><img src="{{ asset('images/hinh2.jpg') }}" alt=""></a></swiper-slide>
        <swiper-slide><a href=""><img src="{{ asset('images/hinh3.jpg') }}" alt=""></a></swiper-slide>
        <swiper-slide><a href=""><img src="{{ asset('images/hinh4.jpg') }}" alt=""></a></swiper-slide>
    </swiper-container>
    <img src="{{ asset('images/quangcao.jpg') }}" alt="" style="width: 10%;margin-right: 20px">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</div>
