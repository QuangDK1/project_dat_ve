<style>
    .event-title {
        text-align: center;
        align-items: center;
        justify-content: center;
    }

    .swiper-event swiper-slide a img {
        width: 100%;
    }
</style>

<div class="container-fluid" style="width: 90%;padding-bottom: 100px;padding-top: 50px">
    <h3 class="event-title"><img src="{{ asset('images/eventtittle.png') }}" alt=""
            style="width: 200px;margin-bottom: 60px"></h3>
    <div class="swiper-event container">
        <swiper-container class="mySwiper" slides-per-view="2" space-between="30" free-mode="true" navigation="true"
            loop="true" style="--swiper-navigation-color: white;">
            <swiper-slide>
                <a href=""><img src="{{ asset('images/event1.png') }}" alt=""></a>
            </swiper-slide>
            <swiper-slide>
                <a href=""><img src="{{ asset('images/event2.jpg') }}" alt=""></a>
            </swiper-slide>
            <swiper-slide>
                <a href=""><img src="{{ asset('images/event3.png') }}" alt=""></a>
            </swiper-slide>
            <swiper-slide>
                <a href=""><img src="{{ asset('images/event4.png') }}" alt=""></a>
            </swiper-slide>
        </swiper-container>
    </div>
</div>
