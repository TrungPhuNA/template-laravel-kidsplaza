@push('link-style-home-outstan-brand')
    <link href="{{ asset('css/pages/home/outstan-brand.css') }}" rel="stylesheet">
@endpush

<section class="section-wrapper">
    <div class="bg-white box-p rounded-4 shadow-sm">
        <x-title-frame-web title="Thương hiệu" :nav="['']" />
        <div class=" outstan-brand-category box-m-top-bottom d-flex justify-content-between">
            @foreach( $data_static['featured_page_category_screen_large'] as $key => $brand)
            <div class="item outstan-brand-item cup {{ $brand['class'] }}">
                <div class="text-center rounded-4 p-2 d-flex align-items-center justify-content-center" style="height:88px;">
                    @if($key !== 6)
                    <img src="{{ asset('images/brand/' . $brand['img'] ) }}" alt="" width="70" height="auto">
                    @else
                    <i class="bi bi-grid fs-2"></i>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@push('link-script-page-category')
    <script src="{{ asset('js/category/category.js') }}"></script>
@endpush