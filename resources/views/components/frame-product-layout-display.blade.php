<link href="{{ asset('css/components/frame-product-layout-display.css') }}" rel="stylesheet">
<section class="section-wrapper">
    <div class="container px-0">
        <div class="bg-white box-p rounded-3 frame-product-layout-display">
            <div class="d-xs-none frame-product-layout-display-title">
                <x-title-frame-web :title="$title" :nav="$nav" />
            </div>
            <div class="d-sm-none d-flex gap-2 align-items-center">
                <div>
                    <img src="https://cdn.kidsplaza.io/assets/icons/diaper.png" width="32" height="32"
                        alt="logo" />
                </div>
                <h4 class="text-bule204 fw-semibold mb-0 fs-xs-7">{{ $title }}</h4>
            </div>
            <div class="d-xs-none row box-m-top-bottom gap-3 frame-product-layout-display-banner overflow-hidden">
                @foreach ($banner as $item)
                    <div class="{{ $item['col'] }} px-0 col-xs-11">
                        <img class="rounded-4" src="{{ asset($item['src']) }}" alt="img" width="100%"
                            height="230">
                    </div>
                @endforeach
            </div>
            <div
                class="d-sm-none box-m-top-bottom frame-product-layout-display-banner-owl-carousel owl-carousel owl-theme">
                @foreach ($banner as $item)
                    <div class="item">
                        <img class="rounded-4" src="{{ asset($item['src']) }}" alt="img" width="100%"
                            height="230">
                    </div>
                @endforeach
            </div>
            <div
                class="row box-m-top-bottom d-flex align-items-center border-top border-bottom frame-product-layout-display-properties py-4">
                @foreach ($properties as $item)
                    <div class="col-xl-6 col-lg-6">
                        <div class="row align-items-center">
                            <div class="col border-end text-center">{{ $item[0] }}</div>
                            <div class="col border-end text-center">{{ $item[1] }}</div>
                            <div class="col border-end text-center">{{ $item[2] }}</div>
                            <div class="col border-end text-center">{{ $item[3] }}</div>
                            <div class="col border-end text-center">{{ $item[4] }}</div>
                            @if (isset($item[5]))
                                <div class="col text-center">{{ $item[5] }}</div>
                            @endif
                        </div>
                        <div class="d-xs-none">
                            <x-progress :width="'w-20'" :progress="'w-50'" />
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="box-m-top-bottom frame-product-layout-display-brand">
                <div
                    class="row justify-content-between flex-nowrap frame-product-layout-owl-carousel owl-carousel owl-theme">
                    @foreach (['https://cdn-v2.kidsplaza.vn/media/amasty/shopby/option_images/huggies_1.png', 'https://cdn-v2.kidsplaza.vn/media/amasty/shopby/option_images/slider/bobby-logo-.jpg', 'https://cdn-v2.kidsplaza.vn/media/amasty/shopby/option_images/slider/logo-goldgi.jpg', 'https://cdn-v2.kidsplaza.vn/media/amasty/shopby/option_images/slider/molfix.jpg'] as $item)
                        <div class="item "><!-- col-xl-1 col-lg-2 col-xs-3 -->
                            <img class="p-2" style="border-radius:50%;" src="{{ $item }}" alt=""
                                width="100" height="100" />
                        </div>
                    @endforeach
                </div>
                <div class="d-xs-none">
                    <x-progress :width="''" :progress="'w-75'" />
                </div>
            </div>
            <div class="">
                <div class="row p-4 px-2 pt-0 p-xs-0">
                    <div class="col-xl-5 col-lg-6 col-md-12 col-xs-12 px-0">
                        <div class="p-3 p-xs-2">
                            @include('components/product-promotional')
                        </div>
                    </div>
                    @foreach ($data ?? [] as $item)
                        <div class="col-xl-20 col-lg-3 col-md-4 col-xs-6 list-product-item px-0">
                            <div class="p-3 p-xs-2">
                                @include('components/product-display', [
                                    'product' => $item,
                                ])
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="w-100 ">
                    <div class="d-xs-none">
                        <x-button
                            class="d-flex mx-auto gap-1 align-items-center text-white bg-bule204 list-product-view-all rounded-5 px-4 py-2 fw-semibold border bg-bule23-hover"
                            text="Xem tất cả" icon="bi bi-chevron-right" iconPosition="right" />
                    </div>
                    <div class="d-sm-none">
                        <x-button
                            class="d-flex mx-auto gap-1 align-items-center border-0 text-bule204 list-product-view-all rounded-5 px-4 py-2 bg-white"
                            text="Xem tất cả" icon="bi bi-chevron-right" iconPosition="right" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
