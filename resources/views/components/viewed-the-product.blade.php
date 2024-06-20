<section class="section-wrapper d-xs-none">
    <link href="{{ asset('css/components/viewed-the-product.css') }}" rel="stylesheet">
    <div style="background-color:#D1EEFD;">
        <div class="container px-0">
<<<<<<< HEAD
            <div class="box-p px-0">
                <x-title-frame-web title="Sản phẩm bạn đã xem" :nav="['']" />
                <div
                    class="viewed-the-product-owl-carousel owl-carousel owl-theme row gap-4 list-product box-m-top-bottom">
                    @foreach ($products ?? [] as $key => $item)
                        <di class="col-3 px-0 item">
                            @include('components/product-display', [
                                'product' => $item,
                            ])
                        </di>
=======
            <div class="box-p">
                <x-title-frame-web :title="'Sản phẩm bạn đã xem'" :nav="['']" />
                <div class="viewed-the-product-owl-carousel owl-carousel owl-theme row gap-4 list-product box-m-top-bottom">
                    @foreach([1,2,3,4,5] as $key => $item)
                    <di class="col-3 px-0 item">
                        @include('components/product-display')
                    </di>
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
                    @endforeach
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</section>
=======
</section>
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
