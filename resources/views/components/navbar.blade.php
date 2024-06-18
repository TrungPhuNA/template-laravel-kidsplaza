@php
$hideOnCertainPages = in_array($page, ['category', 'product-detail', 'cart']);
$headerClass = $hideOnCertainPages ? 'd-md-none-x' : '';
$data_static = json_decode(file_get_contents(storage_path('app/database/data-static.json')), true);
$navbar_bottom = $data_static['navbar-bottom'];
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
                <div class="row justify-content-between align-items-center px-3 py-3">
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
                            <a href="/customer/orders">
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
                        <div class="text-center cup ">
                            <a href="/payment/cart">
                                <div class="relative">
                                    <x-svg-icon name="cart" />
                                </div>
                                <p class="d-xs-none">Giỏ hàng</p>
                            </a>
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
                        <i class="{{$item['icon']}} fs-4"></i>
                        <div class="text-white-hover">{{ $item['text'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</header>

@if($page == 'category')
<div class="d-md-none-y shadow00 header-category">
    <div class="d-flex align-items-center justify-content-between bg-bule204 p-3 text-white">
        <div class="d-flex align-items-center gap-3">
            <i class="bi bi-chevron-left"></i>
            <div>Mẹ bầu và sau sinh</div>
        </div>
        <div class="d-flex align-items-center gap-3">
            <i class="bi bi-search"></i>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 21" width="25" height="21" class="h-[21px] w-[25px]">
                <g clip-path="url(#clip0_1264_1704)">
                    <path d="M18.741 16.5478H8.18262C6.39319 16.5478 4.87849 15.3193 4.65574 13.6972L3.48259 4.95508C3.48259 4.94829 3.48259 4.9415 3.48259 4.93471L3.25242 3.22431C3.15589 2.52521 2.56932 1.96186 1.81197 1.84648L0.772464 1.69037C0.267564 1.60892 -0.0739865 1.16775 0.0151136 0.706207C0.0967887 0.244669 0.579414 -0.0675485 1.08431 0.0138995L2.12382 0.170008C3.67564 0.407565 4.90077 1.58177 5.09382 3.0139L5.22747 3.99127H21.466C22.55 3.99127 23.5598 4.43245 24.2281 5.21299C24.9037 5.98675 25.1488 6.98449 24.9037 7.94829L23.6266 12.9981C23.0995 15.0886 21.0873 16.5478 18.741 16.5478ZM5.45764 5.68811L6.50457 13.4867C6.60852 14.2605 7.32875 14.8442 8.18262 14.8442H18.7484C20.226 14.8442 21.4882 13.9279 21.8224 12.6112L23.0995 7.56141C23.2183 7.10666 23.0995 6.63155 22.7802 6.26503C22.4609 5.89851 21.9857 5.68811 21.466 5.68811H5.45764ZM15.2735 12.3872C15.2735 11.9189 14.8577 11.5388 14.3454 11.5388H9.40032C8.888 11.5388 8.4722 11.9189 8.4722 12.3872C8.4722 12.8555 8.888 13.2356 9.40032 13.2356H14.3454C14.8577 13.2356 15.2735 12.8555 15.2735 12.3872ZM8.83602 21.0003C9.80127 21.0003 10.5883 20.2809 10.5883 19.3985C10.5883 18.5162 9.80127 17.7967 8.83602 17.7967C7.87077 17.7967 7.08372 18.5162 7.08372 19.3985C7.08372 20.2877 7.87077 21.0003 8.83602 21.0003ZM19.5355 21.0003C20.5007 21.0003 21.2878 20.2809 21.2878 19.3985C21.2878 18.5162 20.5007 17.7967 19.5355 17.7967C18.5702 17.7967 17.7832 18.5162 17.7832 19.3985C17.7832 20.2877 18.5628 21.0003 19.5355 21.0003Z" fill="white"></path>
                </g>
                <defs>
                    <clipPath id="clip0_1264_1704">
                        <rect width="25" height="21" fill="white"></rect>
                    </clipPath>
                </defs>
            </svg>
        </div>
    </div>
    <div class="d-flex gap-5 justify-content-center align-items-center py-3">
        <div class="w-40 d-flex gap-2 justify-content-center border p-2 rounded-4">
            <i class="bi bi-arrow-down-up"></i>
            <div>Sắp xếp theo</div>
        </div>
        <div class="w-40 d-flex gap-2 justify-content-center border p-2 rounded-4">
            <i class="bi bi-ui-checks-grid"></i>
            <div>Bộ lọc</div>
        </div>
    </div>
</div>
@endif

@if($page == 'product-detail')
<div class="d-flex justify-content-between align-items-center p-3 header-product shadow00 d-lg-none">
    <div class="bg-gray-rgb1 rounded-5 px-2 py-1">
        <i class="bi bi-chevron-left text-white"></i>
    </div>
    <div class="d-flex align-items-center gap-3">
        <div class="bg-gray-rgb1 rounded-5 px-2 py-1">
            <i class="bi bi-house-door text-white"></i>
        </div>
        <div class="bg-gray-rgb1 rounded-5 px-2 py-1">
            <i class="bi bi-cart2 text-white"></i>
        </div>
    </div>
</div>
@endif

@if($page == 'cart')
<div class="d-flex justify-content-between align-items-center p-3 shadow00 d-lg-none bg-bule204">
    <div class="d-flex gap-2 align-items-center text-white">
        <i class="bi bi-chevron-left fs-4"></i>
        <div>Tiến hành thanh toán</div>
    </div>
    <div class="d-flex align-items-center gap-3">
        <div class="">
            <i class="bi bi-search text-white fs-4"></i>
        </div>
        <div class="">
            <i class="bi bi-cart2 text-white fs-4"></i>
        </div>
    </div>
</div>
@endif

<script src="{{ asset('js/navbar-top-content.js') }}"></script>