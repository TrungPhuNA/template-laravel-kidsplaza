@push('link-style-home-outstan-category')
    <link href="{{ asset('css/pages/home/outstan-category.css') }}" rel="stylesheet">
@endpush

<section class="section-wrapper">
<<<<<<< HEAD
    <div class="outstan-category bg-white box-p rounded-4 shadow-sm">
        <div class="d-xs-none">
            <x-title-frame-web title="Danh mục nổi bật" :nav="['']" />
=======
    <div class="bg-white box-p rounded-4 shadow-sm">
        <div class="d-xs-none">
            <x-title-frame-web :title="'Danh mục nổi bật'" :nav="['']" />
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
        </div>
        <div class="d-sm-none">
            <div class="d-flex align-items-center justify-content-center gap-2 text-bule204">
                <div class="fs-6 fw-semibold">Danh mục nổi bật</div>
                <i class="bi bi-chevron-right"></i>
            </div>
        </div>
        <div class=" row list-category px-1 box-m-top-bottom ">
            @foreach( $data_static['outstan_category'] as $category )
            <div class="item category-item px-2 text-center d-xs-none"> 
                <div class="d-flex align-items-center justify-content-center py-2 px-3 rounded-5 {{$category['bg']}}">
                    <img src="{{ asset('images/icons/category/' . $category['img']) }}" alt="" width="50px" height="50px">
                </div>
                <div class="mt-3 fs-xs-12px">{{ $category['name'] }}</div>
            </div>
            <div class="category-item col-xs-3 px-2 text-center d-md-none">
                <div class="d-flex align-items-center justify-content-center py-2 px-3 rounded-5 ">
                    <img src="{{ asset('images/icons/category/' . $category['img']) }}" alt="" width="50px" height="50px">
                </div>
                <div class="mt-3 mt-xs-0 fs-xs-12px">{{ $category['name'] }}</div>
            </div>
            @endforeach
        </div>
        <x-progress :width="''" :progress="'w-75'" />
    </div>
</section>