<link href="{{ asset('css/pages/category/category.css') }}" rel="stylesheet">

<div class="bg-white box-p rounded-4 shadow-sm">
    <x-title-frame-web :title="'Danh mục'" :nav="['']" />
    <div class="list-category-page row justify-content-between gap-3 gap-xs-0 px-1 box-m-top-bottom">
        @foreach(
        [
        [
        'img' => 'https://cdn-v2.kidsplaza.vn//media/catalog/category/sua-cho-me-bau.jpg',
        'name' => 'Sữa cho mẹ bầu',
        'url' => 'sua-cho-me-bau',
        'class' => 'd-lg-block d-xl-block'
        ],
        [
        'img' => 'https://cdn-v2.kidsplaza.vn//media/catalog/category/bo-nao-healthy-care-ginkgo-biloba-2000-12y-1_1.png',
        'name' => 'Cho mẹ bầu và mẹ sau sinh',
        'url' => 'cho-me-bau-va-me-sau-sinh',
        'class' => ' d-lg-block'
        ],
        [
        'img' => 'https://cdn-v2.kidsplaza.vn//media/catalog/category/bo-quan-ao-sau-sinh-cho-me-in-tim-co-ren-xanh-m23-1.png',
        'name' => 'Quần áo mẹ bầu và sau sinh',
        'url' => 'quan-ao-me-bau-va-sau-sinh',
        'class' => 'd-lg-none d-xl-block'
        ],
        [
        'img' => 'https://cdn-v2.kidsplaza.vn//media/catalog/category/may-hut-sua-cho-be.png',
        'name' => 'Máy hút sữa',
        'url' => 'may-hut-sua',
        'class' => 'd-lg-none d-xl-block'
        ],
        [
        'img' => 'https://cdn-v2.kidsplaza.vn//media/catalog/category/tui-tru-sua-sunmum-50pcs-mau-moi-1.png',
        'name' => 'Túi hút sữa',
        'url' => 'tui-hut-sua',
        'class' => ' d-lg-block'
        ],
        [
        'img' => 'https://cdn-v2.kidsplaza.vn//media/catalog/category/tui-tham-sua-tro-ti.png',
        'name' => 'Thấm sữa và trợ ty',
        'url' => 'tham-sua-va-tro-ty',
        'class' => ' d-lg-block'
        ],
        [
        'img' => 'https://cdn-v2.kidsplaza.vn//media/catalog/category/ao_lot_co_dem_khuy_bam_gb_size_85_1.png',
        'name' => 'Áo ngực cho con bú',
        'url' => 'ao-nguc-cho-con-bu',
        'class' => ' d-md-none d-lg-block'
        ],
        [
        'img' => 'https://cdn-v2.kidsplaza.vn//media/catalog/category/sua-cho-me-bau.jpg',
        'name' => 'Xem tất cả',
        'class' => 'd-md-none d-lg-block'
        ]
        ] as $key => $category
        )
        <div class="item col col-xs-2 category-item-page category-item  px-0 text-center cup {{ $category['class'] }}">
            <div class="d-flex align-items-center flex-column  ">
                <div class="d-flex align-items-center justify-content-center rounded-5 px-2">
                    @if($key !== 7)
                    <img src="{{$category['img']}}" alt="" width="100%" height="auto">
                    @else
                    <div>
                        <i class="bi bi-grid fs-2"></i>
                    </div>
                    @endif
                </div>
                <div class="mt-3 fs-xs-12px">
                    @php
                    $name = $category['name'];
                    $name = strlen($name) > 25 ? substr($name, 0, 25) . '...' : $name;
                    @endphp
                    {{$name}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
    $(document).ready(function() {
        var windowSize = $(window).width();

        if (windowSize > 768) {
            $('.list-category-page').removeClass('list-category-page-owl-carousel owl-carousel owl-theme');
        } else {            
            $('.category-item-page').removeClass('col col-xs-2 category-item')
            $('.list-category-page').addClass('list-category-page-owl-carousel owl-carousel owl-theme');
            $('.list-category-page-owl-carousel').owlCarousel({
                loop: true,
                items: 4,
                margin: 15,
                nav: false,
                dots: false,
            });
        }
    });
</script>