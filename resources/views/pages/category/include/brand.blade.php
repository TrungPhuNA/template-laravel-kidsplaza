<link href="{{ asset('css/pages/home/outstan-brand.css') }}" rel="stylesheet">

<div class="bg-white box-p rounded-4 shadow-sm">
    <x-title-frame-web :title="'Thương hiệu'" :nav="['']" />
    <div class=" outstan-brand-category box-m-top-bottom d-flex justify-content-between">
        @foreach(
        [
        [
        'img' => 'friso_1.jpg',
        'class' => ' d-lg-block'
        ],
        [
        'img' => 'meiji_1.jpeg',
        'class' => 'd-lg-block d-xl-block'
        ],
        [
        'img' => 'glico.jpg',
        'class' => 'd-lg-block'
        ],
        [
        'img' => 'logo-vinamilk_2.jpg',
        'class' => 'd-sm-none d-md-none d-lg-none d-xl-block'
        ],
        [
        'img' => 'nestle_1.jpg',
        'class' => 'd-sm-none d-lg-none d-xl-block'
        ],
        [
        'img' => 'huggies_1.png',
        'class' => 'd-lg-block'
        ],
        [
        'img' => 'bebe-confort.png',
        'class' => 'd-md-none d-lg-block'
        ]
        ]
        as $key => $brand
        )
        <div class="item outstan-brand-item cup {{ $brand['class'] }}">
            <div class="text-center rounded-4 p-2 d-flex align-items-center justify-content-center" style="height:88px;">
                @if($key !== 6)
                <img src="{{ asset('images/brand/' . $brand['img'] ) }}" alt="" width="70" height="70">
                @else
                <i class="bi bi-grid fs-2"></i>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
    $(document).ready(function() {
        var windowSize = $(window).width();

        if (windowSize > 768) {
            $('.outstan-brand-category').removeClass('outstan-brand-category-owl-carousel owl-carousel owl-theme');
        } else {
            $('.outstan-brand-category').addClass('outstan-brand-category-owl-carousel owl-carousel owl-theme');
            $('.outstan-brand-category-owl-carousel').owlCarousel({
                loop: true,
                items: 4,
                margin: 25,
                nav: false,
                dots: false,
            });
        }
    });
</script>