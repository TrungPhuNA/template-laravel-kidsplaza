@push('link-style-home-service-banner')
    <link href="{{ asset('css/pages/home/service-banner.css') }}" rel="stylesheet">
@endpush

<section class="section-wrapper">
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
    </div>
</section>
