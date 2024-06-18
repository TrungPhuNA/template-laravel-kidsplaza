<section class="section-wrapper d-xs-none">
    <link href="{{ asset('css/components/viewed-the-product.css') }}" rel="stylesheet">
    <div style="background-color:#D1EEFD;">
        <div class="container px-0">
            <div class="box-p">
                <x-title-frame-web :title="'Sản phẩm bạn đã xem'" :nav="['']" />
                <div class="viewed-the-product-owl-carousel owl-carousel owl-theme row gap-4 list-product box-m-top-bottom">
                    @foreach([1,2,3,4,5] as $key => $item)
                    <di class="col-3 px-0 item">
                        @include('components/product-display')
                    </di>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>