<link href="{{ asset('css/pages/home/service-banner.css') }}" rel="stylesheet">

<div class="w-100 position-relative">
    <div class="service-banner-owl-carousel owl-carousel owl-theme">
        @foreach([
        'dich_vu-01.png','dich_vu-02.png','dich_vu-03_4.png'
        ] as $image)
        <div class="item">
            <img src="{{ asset('images/banner/'.$image) }}" alt="service-banner" width="100%" class="rounded-3">
        </div>
        @endforeach
    </div>
    <!-- <div class="row overflow-hidden flex-nowrap">
        <div class="col-xl-4 col-lg-6 p-lg-2  d-xs-none">
            <img src="{{ asset('images/banner/dich_vu-01.png') }}" alt="service-banner" width="100%" class="rounded-3">
        </div>
        <div class="col-xl-4 col-lg-6 p-lg-2  col-xs-12">
            <img src="{{ asset('images/banner/dich_vu-02.png') }}" alt="service-banner" width="100%" class="rounded-3">
        </div>
        <div class="col-xl-4 col-lg-6 p-lg-2  d-xs-none">
            <img src="{{ asset('images/banner/dich_vu-03_4.png') }}" alt="service-banner" width="100%" class="rounded-3">
        </div>
    </div> -->
</div>