@push('link-style-list-product')
    <link href="{{ asset('css/pages/home/list-product.css') }}" rel="stylesheet">
@endpush
<section class="section-wrapper">
    <div class="list-product-home box-p">
        <div class="container px-0">
            <div class="d-flex">
                <x-title-frame-web :title="['Nổi bật', 'Bán chạy', 'Mới về']" :nav="['']" />
            </div>
            <div class="row list-product-home-wrap box-m-top-bottom">
                <div class="col-xl-5 col-lg-5  px-0 d-xs-none">
                    @foreach ([1, 2] as $item)
                        <div class="p-xs-2 p-3">
                            @include('components/product-promotional')
                        </div>
                    @endforeach
                </div>
                <div class="col list-product-item px-0">{{-- ps-3  --}}
                    <div class="row">
                        @foreach ($outsan_product as $item)
                            <div class="col col-xs-6 p-xs-2 p-3 "> <!-- col-xl-20 col-lg-20 col-sm-4 col-xs-6  -->
                                @include('components/product-display', [
                                    'product' => $item,
                                ])
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="d-xs-none">
            <x-button
                class="d-flex gap-1 align-items-center text-white bg-bule204 list-product-view-all rounded-5 px-4 py-2 fw-semibold border bg-bule23-hover"
                text="Xem tất cả" icon="bi bi-chevron-right" iconPosition="right" />
        </div>
        <div class="d-sm-none">
            <x-button
                class="d-flex gap-1 align-items-center border-0 text-bule204 list-product-view-all rounded-5 px-4 py-2 bg-white"
                text="Xem tất cả" icon="bi bi-chevron-right" iconPosition="right" />
        </div>
    </div>
</section>
