@push('link-style-category-category')
<link href="{{ asset('css/pages/category/category.css') }}" rel="stylesheet">
@endpush

<section class="section-wrapper ">
    <div class="bg-white box-p rounded-4 shadow-sm">
        <x-title-frame-web :title="'Danh mục'" :nav="['']" />
        <div class="list-category-page row justify-content-between gap-3 gap-xs-0 px-1 box-m-top-bottom">
            @foreach($data_static['list_category_page'] as $key => $category
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
</section>

@push('link-script-page-category')
    <script src="{{ asset('js/category/category.js') }}"></script>
@endpush