@section('style')
@yield('style-customer')
@endsection
@extends('layouts')
@section('title', 'Hệ thống mẹ bỉm sữa')
@section('content')
<div class="container mb-5">
    <div class="row">
        <div class="col-4">
            <div class="d-flex justify-content-between py-3 px-4 text-white bg-bule204 rounded-top-4 ">
                <div class="d-flex align-items-center gap-2">
                    <div>
                        <svg width="45" height="45" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-11 w-11">
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
                    <div>Xin chào,</br> <b>hoanganh</b></div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div>
                        <svg width="45" height="45" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-11 w-11">
                            <g clip-path="url(#clip0_1298_213)">
                                <path d="M34.1184 17.5002C34.1184 8.32213 26.6781 0.881812 17.5 0.881812C8.32191 0.881813 0.881591 8.32213 0.881591 17.5002C0.881591 26.6783 8.32191 34.1187 17.5 34.1187C26.6781 34.1187 34.1184 26.6783 34.1184 17.5002Z" fill="#FDCB2E"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7876 12.5763V22.3306C10.7876 23.1143 11.099 23.866 11.6532 24.4202C12.2074 24.9744 12.9591 25.2858 13.7428 25.2858C14.5266 25.2858 15.2782 24.9744 15.8325 24.4202C16.3867 23.866 16.698 23.1143 16.698 22.3306V12.5763C16.698 11.7925 16.3867 11.0409 15.8325 10.4867C15.2782 9.93245 14.5266 9.62109 13.7428 9.62109C12.9591 9.62109 12.2074 9.93245 11.6532 10.4867C11.099 11.0409 10.7876 11.7925 10.7876 12.5763Z" fill="#FF7132"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7688 10.481L12.8902 17.4752L19.7688 24.4766C20.0366 24.77 20.3609 25.0063 20.7221 25.1715C21.0834 25.3367 21.4742 25.4274 21.8713 25.4382C22.2684 25.4489 22.6636 25.3795 23.0332 25.2341C23.4029 25.0886 23.7394 24.8701 24.0227 24.5917C24.306 24.3133 24.5303 23.9805 24.6821 23.6135C24.8339 23.2464 24.9102 22.8525 24.9063 22.4552C24.9024 22.058 24.8185 21.6657 24.6596 21.3016C24.5006 20.9376 24.2699 20.6093 23.9812 20.3364L21.1778 17.4463L23.9884 14.5561C24.5375 13.9966 24.8417 13.2418 24.8343 12.4579C24.8268 11.6741 24.5083 10.9252 23.9487 10.3762C23.3891 9.82721 22.6344 9.52295 21.8505 9.53041C21.0666 9.53786 20.3178 9.8564 19.7688 10.416V10.481Z" fill="#FF7132"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6113 13.696L12.8902 17.4749L16.6619 21.3261C16.8355 21.503 17.0423 21.6441 17.2705 21.7411C17.4986 21.8381 17.7436 21.8893 17.9915 21.8916C18.2395 21.894 18.4854 21.8475 18.7153 21.7548C18.9453 21.6621 19.1547 21.525 19.3317 21.3514C19.5086 21.1777 19.6497 20.9709 19.7467 20.7428C19.8437 20.5146 19.8949 20.2696 19.8972 20.0217C19.8996 19.7738 19.8531 19.5278 19.7604 19.2979C19.6677 19.068 19.5306 18.8585 19.357 18.6816L18.1864 17.4749L19.2992 16.3405C19.4795 16.1655 19.623 15.9562 19.7213 15.7249C19.8195 15.4936 19.8706 15.245 19.8715 14.9937C19.8723 14.7424 19.8229 14.4935 19.7262 14.2616C19.6295 14.0296 19.4874 13.8194 19.3082 13.6431C19.1291 13.4669 18.9165 13.3282 18.6831 13.2353C18.4496 13.1423 18.1999 13.097 17.9486 13.1019C17.6974 13.1069 17.4496 13.162 17.22 13.264C16.9903 13.366 16.7834 13.5129 16.6113 13.696Z" fill="#FDCB2E"></path>
                                <path d="M17.4928 32.2431C25.6374 32.2431 32.2398 25.6406 32.2398 17.4961C32.2398 9.3515 25.6374 2.74902 17.4928 2.74902C9.34823 2.74902 2.74576 9.3515 2.74576 17.4961C2.74576 25.6406 9.34823 32.2431 17.4928 32.2431Z" stroke="#FF7132" stroke-miterlimit="10"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_1298_213">
                                    <rect width="34" height="34" fill="white" transform="translate(0.5 0.5)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="text-end">
                        <b class="fs-4">0</b></br>Kicoin
                    </div>
                </div>
            </div>
            <ul class="list-none p-3 pb-1 bg-white shadow00 rounded-bottom-4">
                @foreach([
                [
                'img' => 'https://static.kidsplaza.vn/assets/icons/icon-user-heart.svg',
                'text' => 'Thông tin tài khoản',
                'href' => '/customer/info-user'
                ],
                [
                'img' => 'https://static.kidsplaza.vn/assets/icons/order-box.png',
                'text' => 'Quản lí đơn hàng',
                'href' => '/customer/order'
                ],
                [
                'img' => 'https://static.kidsplaza.vn/assets/icons/icon-location.svg',
                'text' => 'Sổ địa chỉ',
                'href' => '/customer/address'
                ],
                [
                'img' => ' https://static.kidsplaza.vn/assets/icons/icon-double-check.svg',
                'text' => 'Sản phầm đã xem',
                'href' => '/customer/viewed-product'
                ],
                [
                'img' => 'https://static.kidsplaza.vn/assets/icons/love-circle.png',
                'text' => 'Sản phẩm yêu thích',
                'href' => '/customer/favourite-product'
                ],
                [
                'img' => 'https://static.kidsplaza.vn/assets/icons/icon-user-heart.svg',
                'text' => 'Nhận xét của tôi',
                'href' => '/customer/review'
                ],
                [
                'img' => 'https://static.kidsplaza.vn/assets/icons/question.png',
                'text' => 'Hỏi đáp',
                'href' => '/customer/question'
                ],
                [
                'img' => 'https://static.kidsplaza.vn/assets/icons/kid-logo-circle.png',
                'text' => 'Thông tin KiCoin',
                'href' => '/customer/info-kicoin'
                ],
                ] as $item)
                <li>
                    <a class="d-flex align-items-center gap-2 bg-white shadow00 p-3 rounded-3 mb-3 cup" href="{{ $item['href'] }}">
                        <div>
                            <img src="{{ $item['img'] }}" alt="" width="35" height="35">
                        </div>
                        <div>{{ $item['text'] }}</div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-8 bg-white box-p shadow00 rounded-4 h-fit-content">
            <div class="customer-order-title text-center fw-semibold fs-4 text-bule204 mb-5">@yield('title-customer')</div>
            @yield('content-customer')
        </div>
    </div>
</div>
@endsection