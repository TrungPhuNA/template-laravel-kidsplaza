@push('link-style-list-product')
    <link href="{{ asset('css/pages/home/list-product.css') }}" rel="stylesheet">
@endpush
<section class="section-wrapper">
    <div class="list-product-home box-p">
        <div class="container px-0">
            <div class="d-flex">
                <x-title-frame-web :title="['Nổi bật','Bán chạy','Mới về']" :nav="['']" />
            </div>
            <div class="row box-m-top-bottom"> 
                @foreach([1,2] as $item)
                <div class="col-xl-5 col-lg-5  px-0 d-xs-none">
                    <div class="p-xs-2 p-2 ps-0">
                        @include('components/product-promotional')
                    </div>
                </div>
                @foreach([1,2,3] as $item)
                <div class="col-xl-20 col-lg-20 col-sm-4 col-xs-6  list-product-item px-0">
                    <div class="p-xs-2 p-2">
                        @include('components/product-display')
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
            <x-button class="d-flex gap-1 align-items-center text-white bg-bule204 list-product-view-all rounded-5 px-4 py-2 fw-semibold border bg-bule23-hover" text="Xem tất cả" icon="bi bi-chevron-right" iconPosition="right" />
        </div>
    </div>
</section>