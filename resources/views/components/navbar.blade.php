@php
<<<<<<< HEAD
$hideOnCertainPages = in_array($page, ['category', 'product-detail', 'cart']);
$headerClass = $hideOnCertainPages ? 'd-md-none-x' : '';
$data_static = json_decode(file_get_contents(storage_path('data-static.json')), true);
$navbar_bottom = $data_static['navbar-bottom'];
=======
    $hideOnCertainPages = in_array($page, ['category', 'product-detail', 'cart']);
    $headerClass = $hideOnCertainPages ? 'd-md-none-x' : '';
    $data_static = json_decode(file_get_contents(storage_path('app/database/data-static.json')), true);
    $navbar_bottom = $data_static['navbar-bottom'];
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
@endphp

<header class="bg-cF {{ $headerClass }}">
    <div class="bg-cF d-xs-none d-md-block">
        <div class="container px-0">
            <div class="d-flex justify-content-between align-items-center py-2 header-top">
                <div class="d-flex align-items-center gap-2 header-top-left">
                    <x-svg-icon name="location" />
                    <div>
                        Xem tồn kho, giá bán tại:
                    </div>
                    <div class="d-flex gap-1 align-items-center">
                        <div class="fw-bold" style="color:rgb(33 64 154);">Miền Bắc</div>
                        <i class="bi bi-chevron-down "></i>
                    </div>
                </div>
                <div class="text-body-secondary header-top-right d-flex align-items-center ">
                    <div class="px-2 ">Hotline: 1800.6608</div>
                    <div class="d-sm-none d-lg-block px-2 border-secondary border-start border-end">Zalo cửa hàng</div>
                    <div class="d-sm-none d-lg-block px-2">Ưu đãi khi tải app</div>
                    <div class="px-2 border-secondary border-start">Hệ thống 159 cửa hàng</div>
                    <div class="d-sm-none d-lg-block px-2 border-secondary border-start">Thưởng Kicoin</div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-wrap pt-0 pb-2">
        <div class="navbar-top w-100 position-relative">
            <div class="container p-0 navbar-top-content">
<<<<<<< HEAD
                <div class="row justify-content-between align-items-center px-4 py-3">
=======
                <div class="row justify-content-between align-items-center px-3 py-3">
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
                    <div class="col-xl-2 col-md-3 col-lg-3 d-xs-none px-0 cup">
                        <a href="/">
                            <img src="{{ asset('images/Logo_header.png') }}" alt="logo" width="100%" height="auto">
                        </a>
                    </div>
                    <div class="col-xl-7 col-lg-5 col-md-5 col-sm-11 col-xs-11 position-relative navbar-input-search ps-4 pe-0 ps-xs-0">
                        <input class="shadow00 rounded-5 border-0 w-100 py-1 px-3" type="text" placeholder="Ba mẹ tìm kiếm gì cho con hôm nay">
                        <div class="position-absolute search ">
                            <i class="bi bi-search d-xs-none"></i>
                            <div class="d-md-none">
                                <div class="d-flex gap-1 option ps-2 text-bule204 ">
                                    <div>Miền Bắc</div>
                                    <div><i class="bi bi-caret-down-fill "></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute d-md-none logo">
                            <img src="{{ asset('images/kid-logo-circle.png') }}" alt="logo" width="32" height="32">
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-1 col-xs-1 d-flex align-items-center justify-content-center gap-3 navbar-right px-0">
                        <div class="text-center cup d-xs-none">
                            <a href="/customer/order">
                                <div class="relative">
                                    <x-svg-icon name="history-order" />
                                </div>
                                <p class="text-sm">Lịch sử đơn hàng</p>
                            </a>
                        </div>
                        <div class="text-center cup d-xs-none">
                            <x-button class="border-0 bg-transparent loginModal" bsTarget="loginModal" text="" icon="" iconPosition="left">
                                <div class="relative">
                                    <x-svg-icon name="account" />
                                </div>
                                <p class="">Tài khoản</p>
                            </x-button>
                        </div>
<<<<<<< HEAD
                        <div class="text-center cup navbar-cart">
                            <div class="position-relative">
=======
                        <div class="text-center cup ">
                            <a href="/payment/cart">
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
                                <div class="relative">
                                    <x-svg-icon name="cart" />
                                </div>
                                <p class="d-xs-none">Giỏ hàng</p>
<<<<<<< HEAD
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                    1
                                </span>
                                <div class="cart-modal position-absolute ">
                                    <div class="bg-white p-3 rounded-4 shadow00 position-relative">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="fs-4 text-bule204 fw-semibold">Giỏ hàng</div>
                                                <div class="text-bule204 " style="font-size:12px;">(1 sản phẩm)</div>
                                            </div>
                                            <div class="fs-4 text-orange-fbb fw-semibold">265.000đ</div>
                                        </div>
                                        <div class="row my-3 border-bottom pb-3">
                                            <div class="col-3 position-relative">
                                                <img src="https://cdn-v2.kidsplaza.vn/202x202/media/catalog/product/v/i/vitamin-d3-k2-mk7-sunday-natural-20ml-1.jpg" width="72" height="72" />
                                                <div class="position-absolute top-0 end-0 text-orange-fbb">1 x</div>
                                            </div>
                                            <div class="col text-start text-bule204 ">
                                                Vitamin D3K2 MK7 Sunday Natural 20ml của...
                                            </div>
                                            <div class="col-3 fs-6 fw-semibold">
                                                265.000đ
                                            </div>
                                        </div>
                                        <div class="bg-orange-fbb w-40 py-2 rounded-5 mx-auto">
                                            <a href="/payment/cart" class="text-white">
                                                XEM GIỎ HÀNG
                                            </a>
                                        </div>
                                        <div class="cart-modal-pointer position-absolute text-white">
                                            <i class="bi bi-caret-left-fill fs-4"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
=======
                            </a>
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-bg position-absolute d-xs-none"></div>
            <div class="d-md-none">
                <div class="navbar-top-banner-owl-carousel owl-carousel owl-theme">
                    @foreach([
                    'https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/b/a/banner_home_appthoi-trang-sale-t6.png',
                    'https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/b/a/banner_home_app-sap-sinh-roi-t6.png',
                    'https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/k/v/kv_tai_app_t6_home_app_750x640.png'
                    ] as $item)
                    <div class="item">
                        <img src="{{ $item }}" alt="banner" width="100%" height="300px">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="welcome d-md-none row bg-white shadow00 position-absolute py-2 rounded-3">
                <div class="welcome-col-left col pe-1 d-flex align-items-center gap-2 border-end">
                    <div>
                        <img src="https://cdn.kidsplaza.io/assets/profile.png" width="30" height="30" />
                    </div>
                    <div>
                        <div>Xin chào, <b>Bạn!</b></div>
                        <div class="d-flex gap-2 mt-1 login">
                            <x-button class="border-0 text-white rounded-5 py-1 px-2 loginModal" bsTarget="loginModal" text="" icon="" iconPosition="left">
                                Đăng nhập
                            </x-button>
                            <x-button class="border-0 text-white rounded-5 py-1 px-2 registerModal" bsTarget="loginModal" text="" icon="" iconPosition="left">
                                Đăng ký
                            </x-button>
                        </div>
                    </div>
                </div>
                <div class="welcome-col-right col d-flex align-items-center gap-1">
                    <div>
                        <img src="	https://cdn.kidsplaza.io/assets/icons/kcoin.png" alt="" width="30" height="30" />
                    </div>
                    <div>
                        Vui lòng đăng nhập để kiểm tra điểm Kicoin
                    </div>
                </div>
            </div>
        </div>
        <div class="container navbar-bottom ">
            <div class="row w-100 pt-2 d-xs-none ">
                @foreach($navbar_bottom as $key => $item
                )
                <div class="col {{ $key === 4 ? 'd-sm-none d-lg-block' : ''  }}">
                    <div class="d-flex gap-2 align-items-center fw-semibold text-bule204 cup">
                        <i class="{{ $item['icon'] }} fs-4"></i>
                        <div class="text-white-hover">{{ $item['text'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</header>


@switch($page)
<<<<<<< HEAD
@case('category')
@include('components/header/header-category')
@break
@case('product-detail')
@include('components/header/header-product-detail')
@break
@case('cart')
@include('components/header/header-cart')
@break
@endswitch
=======
    @case('category')
        @include('components/header/header-category')
    @break
    @case('product-detail')
        @include('components/header/header-product-detail')
    @break
    @case('cart')
        @include('components/header/header-cart')
    @break
@endswitch

>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
