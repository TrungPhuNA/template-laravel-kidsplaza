@push('link-style-home-outstan-brand')
    <link href="{{ asset('css/pages/home/outstan-brand.css') }}" rel="stylesheet">
@endpush

<section class="section-wrapper">
    <div class="container px-0">
        <div class=" bg-white box-p rounded-4 shadow-sm d-xs-none">
            <x-title-frame-web :title="'Thương hiệu nổi bật'" :nav="['']" />
            <div class="outstan-brand-owl-carousel owl-carousel owl-theme outstan-brand box-m-top-bottom ">
                @foreach( $data_static['featured_screen_large'] as $brand) 
                <div class="item outstan-brand-item">
                    <div class="text-center mb-4 rounded-4 py-2 px-4">
                        <img src="{{ asset('images/brand/' . $brand['img_1']) }}" alt="" width="70" height="70">
                    </div>
                    <div class="text-center rounded-4 py-2 px-4">
                        <img src="{{ asset('images/brand/' . $brand['img_2']) }}" alt="" width="70" height="70">
                    </div>
                </div>
                @endforeach
            </div>
            <x-progress :width="''" :progress="'w-50'" />
        </div>
    </div>
    
    <div class="d-sm-none bg-white pb-4 box-m-top-bottom">
        <div class="outstan-brand-sm-owl-carousel owl-carousel owl-theme outstan-brand d-flex justify-content-between overflow-hidden " >
            @foreach( $data_static['featured_screen_small'] as $brand )
            <div class="item text-center rounded-4 p-2 ">
                <img src="{{ asset('images/brand/' . $brand) }}" alt="" width="70" height="70">
            </div>
            @endforeach
        </div>
        <div class="outstan-banner-sm-owl-carousel owl-carousel owl-theme">
            @foreach([
                'https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/k/v/kv_dss_19k_home_web_698x296_6.png',
                'https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/b/a/banner_home_m_i-me-bau-den-la-tang-t6_1.png',
                'https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/b/n/bn-home-web_2.png',
                'https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/b/a/banner_home_bs_t6.png',
                'https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/b/n/bn-home-web.png'
            ] as $item)
            <div class="item">
                <img class="rounded-4" src="{{ $item }}" alt="img" width="100%" height="200">
            </div>
            @endforeach
        </div>
    </div>
</section>