@push('link-style-home-header')
    <link href="{{ asset('css/pages/home/header.css') }}" rel="stylesheet">
@endpush

<section class="section-wrapper">
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
                    @foreach ($data_static['list-category'] as $item)
<<<<<<< HEAD
                        <li>
                            <a href="{{ '/' . $item['url'] }}" class="d-flex align-items-center gap-2">
                                <img src="{{ asset('images/icons/category/' . $item['icon']) }}" alt=""
                                    width="16" height="16px">
                                <div class="text-bule204-hover fw-bold-hover fs-6">{{ $item['title'] }}</div>
                            </a>
                        </li>
=======
                    <li>
                        <a href="{{ '/'. $item['url'] }}" class="d-flex align-items-center gap-2">
                            <img src="{{ asset('images/icons/category/' . $item['icon']) }}" alt="" width="16" height="16px">
                            <div class="text-bule204-hover fw-bold-hover fs-6">{{$item['title']}}</div>
                        </a>
                    </li>
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
                    @endforeach
                </ul>
            </nav>
        </div>
        <div class="col-xl-7 col-lg-9 col-xs-12 header-col-center ">
            <div class="d-xs-none">
                <div class="header-center-owl-carousel d-md-none-x owl-carousel owl-theme postions-relative ">
<<<<<<< HEAD
                    @foreach ($data_static['header_banner'] as $item)
                        <div class="item">
                            <img class="rounded-5" src="{{ $item['img'] }}" width="100%" height="296px"
                                alt="{{ $item['alt'] }}">
=======
                    @foreach( $data_static['header_banner'] as $item)
                        <div class="item">
                            <img class="rounded-5" src="{{ $item['img'] }}" width="100%" height="296px" alt="{{ $item['alt'] }}">
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
                        </div>
                    @endforeach
                </div>
            </div>
<<<<<<< HEAD
            <div
                class="header-conven-owl-carousel owl-carousel owl-theme row justify-content-between postions-relative bg-white mt-4 mx-1 rounded-4 p-3 p-xs-0 gap-3 lower-bar">
                @foreach ($data_static['header_tool'] as $key => $item)
                    <div class="lower-bar-item px-0 {{ $key == 0 ? 'd-sm-none' : '' }}">
                        <div class="mx-auto icon">
                            <img src="{{ asset('images/icons/' . $item['icon']) }}" alt="" width="35px"
                                height="38px">
                        </div>
                        <div class="mt-2 text-center">{{ $item['title'] }} <br /> {{ $item['subtitle'] }}</div>
                    </div>
=======
            <div class="header-conven-owl-carousel owl-carousel owl-theme row postions-relative bg-white mt-4 mx-1 rounded-4 p-3 p-xs-0 gap-3 lower-bar">
                @foreach ( $data_static['header_tool'] as $key => $item)
                <div class="lower-bar-item px-0 {{ $key == 0 ? 'd-sm-none' : '' }}">
                    <div class="mx-auto icon">
                        <img src="{{ asset('images/icons/' . $item['icon']) }}" alt="" width="35px" height="38px">
                    </div>
                    <div class="mt-2 text-center">{{ $item['title'] }} <br /> {{ $item['subtitle'] }}</div>
                </div>
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
                @endforeach
            </div>
        </div>
        <div class="col header-col-right p-3 rounded-5 d-xs-none d-lg-none-y">
            <div class="bg-white py-3 px-2 rounded-4 header-col-right-welcome">
                <div class="d-flex align-items-center gap-2">
                    <div class="">
                        <x-svg-icon name="avatart-default" />
                    </div>
                    <div class="header-welcome w-100">
<<<<<<< HEAD
                        <p class="mb-0">Chào <span class="fw-bold" style="color:#434657;">Ba/Mẹ</span> đến với <span
                                class="fw-bold" style="color:#204099;">KidsPlaza</span></p>
=======
                        <p class="mb-0">Chào <span class="fw-bold" style="color:#434657;">Ba/Mẹ</span> đến với <span class="fw-bold" style="color:#204099;">KidsPlaza</span></p>
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
                        <p class="mb-0">(Vui lòng đăng nhập để kiểm tra điểm KiCoin)</p>
                    </div>
                </div>
                <div class="header-button">
<<<<<<< HEAD
                    <x-button class="rounded-5 bg-white bg-bule204-hover registerModal" bsTarget="registerModal"
                        text="Đăng ký" icon="" iconPosition="left" />
                    <x-button class="rounded-5 bg-white bg-bule204-hover loginModal" bsTarget="loginModal"
                        text="Đăng nhập" icon="" iconPosition="left" />
                </div>
            </div>
            <div class="header-col-right-check d-flex my-2">
                @foreach (['Quản lý đơn hàng', 'Tích điểm Kicoin', 'Quản lý thông tin tài khoản'] as $key => $item)
                    <div class="bg-white text-center p-1 py-2 rounded-3 {{ $key === 1 ? 'mx-2' : '' }}">
                        <i class="bi bi-check2 fs-6 text-bule204 "></i>
                        <div class="text-bule204 ">{{ $item }}</div>
                    </div>
                @endforeach
            </div>
            <div>
                <img class="rounded-4" src="{{ asset('images/banner/app-banner.png') }}" alt="" width="100%"
                    height="auto">
            </div>
            <div class="d-flex w-100 justify-content-around header-col-right-mxh mt-2">
                @foreach ([['icon' => 'facebook-round-icon.png', 'followers' => '1,2M', 'sub' => 'Followers'], ['icon' => 'youtube-round-icon.png', 'followers' => '23,5k', 'sub' => 'Subscribers'], ['icon' => 'tiktok-round-icon.png', 'followers' => '93K', 'sub' => 'Followers']] as $item)
                    <div class="text-center">
                        <a href="">
                            <img class="" src="{{ asset('images/icons/' . $item['icon']) }}" alt=""
                                width="32px" height="auto">
=======
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
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
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
<<<<<<< HEAD
</section>
=======
</section>
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
