<link href="{{ asset('css/pages/home/header.css') }}" rel="stylesheet">


<div class="row">
    <div class="col header-col-left bg-white p-4 pt-4 rounded-5 d-xs-none d-lg-none-y">
        <div class="d-flex align-items-center gap-1">
            <div>
                <i class="bi bi-list fs-3 text-body-emphasis"></i>
            </div>
            <div class="fs-5 fw-semibold">Danh mục</div>
        </div>
        <nav class="mt-1">
            <ul class="mb-0">
                @foreach ([
                ['icon' => 'me_bau_va_sau_sinh.png', 'title' => 'Mẹ bầu và sau sinh', 'url' => 'me-bau-va-sau-sinh'],
                ['icon' => 'sua_cho_be.png', 'title' => 'Sữa cho bé', 'url'=> 'sua-cho-be'],
                ['icon' => 'be_an_dam.png', 'title' => 'Bé ăn dặm', 'url' => 'be-an-dam'],
                ['icon' => 'bim_ta_va_ve_sinh.png', 'title' => 'Bỉ tã và vệ sinh', 'url' => 'bi-ta-va-ve-sinh'],
                ['icon' => 'binh_sua_va_phu_kien.png', 'title' => 'Bình sữa và phụ kiện', 'url' => 'binh-sua-va-phu-kien'],
                ['icon' => 'do_so_sinh.png', 'title' => 'Đồ sơ sinh', 'url' => 'do-so-sinh'],
                ['icon' => 'thoi_trang_va_phu_kien.png', 'title' => 'Thời trang và phụ kiện', 'url' => 'thoi-trang-va-phu-kien'],
                ['icon' => 'vitamin_va_suc_khoe.png', 'title' => 'Vitamin và sức khỏe', 'url' => 'vitamin-va-suc-khoe'],
                ['icon' => 'do_dung_me_va_be.png', 'title' => 'Đồ dùng mẹ và bé', 'url' => 'do-dung-me-va-be'],
                ['icon' => 'giat_xa_va_tam_goi.png', 'title' => 'Giặt xả và Tắm gội', 'url' => 'giat-xa-va-tam-goi'],
                ['icon' => 'do_choi_va_hoc_tap.png', 'title' => 'Đồ chơi và học tập', 'url' => 'do-choi-va-hoc-tap']
                ] as $item)
                <li>
                    <a href="{{ '/'. $item['url'] }}" class="d-flex align-items-center gap-2">
                        <img src="{{ asset('images/icons/category/' . $item['icon']) }}" alt="" width="16" height="16px">
                        <div class="text-bule204-hover fw-bold-hover fs-6">{{$item['title']}}</div>
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
    <div class="col-xl-7 col-lg-9 col-xs-12 header-col-center ">
        <div class="d-xs-none">
            <div class="header-center-owl-carousel d-md-none-x owl-carousel owl-theme postions-relative ">
                <div class="item">
                    <img class="rounded-5" src="https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/b/a/banner_home-ngay-gia-dinh-t6.png" width="100%" height="296px" alt="First slide">
                </div>
                <div class="item">
                    <img class="rounded-5" src="https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/b/a/banner_home_web-nang-cap-web-moi-t6.png" width="100%" height="296px" alt="Second slide">
                </div>
                <div class="item">
                    <img class="rounded-5" src="https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/b/a/banner_homethoi-trang-sale-t6.png" width="100%" height="296px" alt="Third slide">
                </div>
            </div>
        </div>
        <div class="header-conven-owl-carousel owl-carousel owl-theme row postions-relative bg-white mt-4 mx-1 rounded-4 p-3 p-xs-0 gap-3 lower-bar">
            @foreach ([
            ['icon' => 'active-category.png', 'title' => 'Danh Mục', 'subtitle' => ''],
            ['icon' => 'blue-fire.png', 'title' => 'Siêu deal', 'subtitle' => 'mỗi ngày'],
            ['icon' => 'voucher.png', 'title' => 'Voucher', 'subtitle' => 'giảm giá'],
            ['icon' => 'active-gift.png', 'title' => 'Ưu đãi', 'subtitle' => 'hấp dẫn'],
            ['icon' => 'order-box.png', 'title' => 'Tra cứu', 'subtitle' => 'đơn hàng'],
            ['icon' => 'kid-location.png', 'title' => 'Siêu thị', 'subtitle' => 'gần bạn'],
            ['icon' => 'free-ship.png', 'title' => 'Miễn phí', 'subtitle' => 'giao hàng'],
            ['icon' => 'circle-45.png', 'title' => 'Đổi trả', 'subtitle' => '15 ngày'],
            ['icon' => 'icon-kicoin.png', 'title' => 'Tích lũy', 'subtitle' => 'Kicoin'],
            ['icon' => 'question.png', 'title' => 'Hỏi đáp', 'subtitle' => 'ngay'],
            ] as $key => $item)
            <div class="lower-bar-item px-0 {{ $key == 0 ? 'd-sm-none' : '' }}">
                <div class="mx-auto icon">
                    <img src="{{ asset('images/icons/' . $item['icon']) }}" alt="" width="35px" height="38px">
                </div>
                <div class="mt-2 text-center">{{ $item['title'] }} <br /> {{ $item['subtitle'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col header-col-right p-3 rounded-5 d-xs-none d-lg-none-y">
        <div class="bg-white py-3 px-2 rounded-4 header-col-right-welcome">
            <div class="d-flex align-items-center gap-2">
                <div class="">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-[34px] w-[34px] shrink-0">
                        <rect x="-0.5" y="0.5" width="33" height="33" rx="16.5" transform="matrix(-1 0 0 1 33.5 0.5)" fill="#E0B8FF"></rect>
                        <rect x="-0.5" y="0.5" width="33" height="33" rx="16.5" transform="matrix(-1 0 0 1 33.5 0.5)" fill="url(#pattern0)"></rect>
                        <rect x="-0.5" y="0.5" width="33" height="33" rx="16.5" transform="matrix(-1 0 0 1 33.5 0.5)" stroke="#21409A"></rect>
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_1298_209" transform="translate(-0.0459929 -0.0408014) scale(0.00628141)"></use>
                            </pattern>
                            <image id="image0_1298_209" width="199" height="199" xlink:href="data:image/png;base64,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"></image>
                        </defs>
                    </svg>
                </div>
                <div class="header-welcome w-100">
                    <p class="mb-0">Chào <span class="fw-bold" style="color:#434657;">Ba/Mẹ</span> đến với <span class="fw-bold" style="color:#204099;">KidsPlaza</span></p>
                    <p class="mb-0">(Vui lòng đăng nhập để kiểm tra điểm KiCoin)</p>
                </div>
            </div>
            <div class="header-button">
                <x-button class="rounded-5 bg-white bg-bule204-hover registerModal" bsTarget="registerModal" text="Đăng ký" icon="" iconPosition="left" />
                <x-button class="rounded-5 bg-white bg-bule204-hover loginModal" bsTarget="loginModal" text="Đăng nhập" icon="" iconPosition="left" />
            </div>
        </div>
        <div class="header-col-right-check d-flex my-2">
            @foreach(['Quản lý đơn hàng', 'Tích điểm Kicoin', 'Quản lý thông tin tài khoản'] as $key => $item)
            <div class="bg-white text-center p-1 py-2 rounded-3 {{ $key === 1 ? 'mx-2' : '' }}">
                <i class="bi bi-check2 fs-6 text-bule204 "></i>
                <div class="text-bule204 ">{{$item}}</div>
            </div>
            @endforeach
        </div>
        <div>
            <img class="rounded-4" src="{{ asset('images/banner/app-banner.png') }}" alt="" width="100%" height="auto">
        </div>
        <div class="d-flex w-100 justify-content-around header-col-right-mxh mt-2">
            @foreach ([
            ['icon' => 'facebook-round-icon.png', 'followers' => '1,2M', 'sub' => 'Followers'],
            ['icon' => 'youtube-round-icon.png', 'followers' => '23,5k', 'sub' => 'Subscribers'],
            ['icon' => 'tiktok-round-icon.png', 'followers' => '93K', 'sub' => 'Followers']
            ] as $item)
            <div class="text-center">
                <a href="">
                    <img class="" src="{{ asset('images/icons/' . $item['icon']) }}" alt="" width="32px" height="auto">
                    <div class="mt-1">
                        <b>{{ $item['followers'] }}</b>
                    </div>
                    <div>{{ $item['sub'] }}</div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Show a second modal and hide this one with the button below.
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
            </div>
        </div>
    </div>
</div>


<x-form-info isModal="1" name="" idModal="registerModal" />
<x-form-info isModal="1" name="" idModal="loginModal" />