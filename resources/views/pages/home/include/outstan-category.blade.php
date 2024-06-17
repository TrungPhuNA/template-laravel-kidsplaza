<link href="{{ asset('css/pages/home/outstan-category.css') }}" rel="stylesheet">

<div class="bg-white box-p rounded-4 shadow-sm">
    <div class="d-xs-none">
        <x-title-frame-web :title="'Danh mục nổi bật'" :nav="['']" />
    </div>
    <div class="d-sm-none">
        <div class="d-flex align-items-center justify-content-center gap-2 text-bule204">
            <div class="fs-6 fw-semibold">Danh mục nổi bật</div>
            <i class="bi bi-chevron-right"></i>
        </div>
    </div>
    <!-- row flex-nowrap overflow-hidden gap-lg-2 gap-xl-5 gap-xs-0 -->
     <!-- list-category-owl-carousel owl-carousel owl-theme -->
    <div class=" row list-category px-1 box-m-top-bottom ">
        @foreach(
        [
        [
        'img' => 'me_bau_va_sau_sinh.png',
        'name' => 'Mẹ bầu và sau sinh',
        'bg' => 'bg-yellow-ff'
        ],
        [
        'img' => 'sua_cho_be.png',
        'name' => 'Sữa cho bé',
        'bg' => 'bg-rose-fe'
        ],
        [
        'img' => 'bim_ta_va_ve_sinh.png',
        'name' => 'Bỉm tã và vệ sinh',
        'bg' => 'bg-blue-b6'
        ],
        [
        'img' => 'do_so_sinh.png',
        'name' => 'Đồ sơ sinh',
        'bg' => 'bg-green-c8'
        ],
        [
        'img' => 'binh_sua_va_phu_kien.png',
        'name' => 'Bình sữa và phụ kiện',
        'bg' => 'bg-yellow-ff'
        ],
        [
        'img' => 'do_dung_me_va_be.png',
        'name' => 'Đồ dùng mẹ và bé',
        'bg' => 'bg-yellow-f1d'
        ],
        [
        'img' => 'thoi_trang_va_phu_kien.png',
        'name' => 'Thời trang và phụ kiện',
        'bg' => 'bg-rose-fe'
        ],
        [
        'img' => 'vitamin_va_suc_khoe.png',
        'name' => 'Vitamin và sức khỏe',
        'bg' => 'bg-green-c8'
        ],
        [
        'img' => 'giat_xa_va_tam_goi.png',
        'name' => 'Giặt xả và tắm gội',
        'bg' => 'bg-rose-fe'
        ],
        [
        'img' => 'be_an_dam.png',
        'name' => 'Bé ăn dặm',
        'bg' => 'bg-green-c8'
        ]
        ] as $category
        )
        <div class="item category-item px-2 text-center d-xs-none"> <!--  col-lg-2 col-xs-2 -->
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