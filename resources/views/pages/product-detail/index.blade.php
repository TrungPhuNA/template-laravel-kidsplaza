@extends('layouts')
@section('title', 'Chi tiết sản phẩm')
@section('content')
<link href="{{ asset('css/pages/product-detail/product-detail.css') }}" rel="stylesheet">
<div class="position-relative">
    <div class="container px-0">
        <div class="d-md-none-x">
            <div class="d-flex gap-2 align-items-center section-wrapper text-bule204">
                <div>
                    <a href="/" class="text-bule204">Trang chủ</a>
                </div>
                <div><i class="bi bi-chevron-right"></i></div>
                <div>Bột ngũ cốc mẹ bầu Babba's Mommy 270g </div>
            </div>
        </div>
        <section class="section-wrapper">
            <div class="row">
                <div class="col-xl-9 col-lg-12">
                    <section class="section-wrapper d-xs-none d-sm-none d-lg-block">
                        @include('pages/product-detail/include/product-view')
                    </section>
                    <section class="section-wrapper d-lg-none">
                        @include('pages/product-detail/include/product-view')
                        <div class="fw-semibold fs-1" style="color:#FF7132;">155.000đ</div>
                        <div class="bg-white rounded-4 box-p text-black">
                            <div class="fs-4 fw-semibold">Bột ngũ cốc mẹ bầu Babba's Mommy 270g </div>
                            <div class="d-flex justify-content-between align-items-end">
                                <div class="my-1">
                                    <div><b>SKU</b> 112120030</div>
                                    <div>Chưa có đánh giá</div>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-heart fs-4"></i>
                                    <div>Yêu thích (1)</div>
                                    <i class="bi bi-share fs-4"></i>
                                    <i class="bi bi-chat-dots fs-4"></i>
                                </div>
                            </div>
                            <div class="row flex-wrap border-top mt-1 pt-3 gap-2">
                                <div class="col-5 d-flex gap-2">
                                    <div>
                                        <img src="https://static.kidsplaza.vn/assets/icons/icon-kicoin-mobile.png" alt="" width="28" height="auto" />
                                    </div>
                                    <div>Tích lũy 8% KiCoin</div>
                                </div>
                                <div class="col-5 d-flex gap-2">
                                    <div>
                                        <img src="https://static.kidsplaza.vn/assets/icons/icon-return-mobile.png" alt="" width="28" height="auto" />
                                    </div>
                                    <div>Đổi trả trong 15 ngày</div>
                                </div>
                                <div class="col-5 d-flex gap-2">
                                    <div>
                                        <img src="https://static.kidsplaza.vn/assets/icons/icon-free-shipping-mobile.png" alt="" width="28" height="auto" />
                                    </div>
                                    <div>Freeship phạm vi 7km</div>
                                </div>
                                <div class="col-5 d-flex gap-2">
                                    <div>
                                        <img src="https://static.kidsplaza.vn/assets/icons/icon-commit-mobile.png" alt="" width="28" height="auto" />
                                    </div>
                                    <div>Cam kết chính hãng</div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-3 d-sm-none d-xs-none  d-xl-block">
                    <div class="product-detail-col-right box-p rounded-4 h-auto" style="background-color:#D5EFFD;">
                        <h6 class="title text-center mb-3 text-bule204 fw-semibold">TIỆN ÍCH MUA SẮM</h6>
                        <div>
                            <img class="rounded-4" src="https://cdn.kidsplaza.io/assets/images/download-app-banner-204x210.png" width="100%" height="auto" />
                        </div>
                        <div class="py-2 ps-4 bg-white rounded-4 mt-3">
                            <ul class="benefits-list mb-0 py-2">
                                <li class="fw-semibold"><img class="me-2" width="30" height="30" src="https://cdn.kidsplaza.io/assets/icons/icon-kicoin.png" alt="Icon"> Tích lũy 8% KiCoin</li>
                                <li class="fw-semibold"><img class="me-2" width="30" height="30" src="https://cdn.kidsplaza.io/assets/icons/circle-45.png" alt="Icon"> Đổi trả trong 15 ngày</li>
                                <li class="fw-semibold"><img class="me-2" width="30" height="30" src="https://cdn.kidsplaza.io/assets/icons/free-ship.png" alt="Icon"> Freeship phạm vi 7km</li>
                                <li class="fw-semibold"><img class="me-2" width="30" height="30" src="https://cdn.kidsplaza.io/assets/icons/icon-commit.png" alt="Icon"> Cam kết chính hãng</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-12">
                    <section class="section-wrapper">
                        @include('pages/product-detail/include/product-des')
                    </section>
                    <section class="section-wrapper">
                        @include('pages/product-detail/include/product-param')
                    </section>
                    <section class="section-wrapper">
                        @include('pages/product-detail/include/product-review')
                    </section>
                    <section class="section-wrapper">
                        @include('pages/product-detail/include/product-question')
                    </section>
                </div>
                <div class="col-3 d-sm-none d-xs-none d-xl-block">
                    <div class="bg-white rounded-4  box-p text-bule204 text-center fw-semibold mb-3">
                        <div class="border-bottom mb-3 pb-3">Video sản phẩm</div>
                        <div class="" style="font-size:12px;">Hiện không có video sản phẩm nào.</div>
                    </div>
                    <div class="bg-white rounded-4  box-p text-bule204 text-center fw-semibold">
                        <div class="border-bottom mb-3 pb-3">Thông tin bổ ích</div>
                        <div class="" style="font-size:12px;">Hiện không có bài viết nào.</div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="section-wrapper d-xs-none d-sm-none d-lg-block">
        <x-products-just-for-you bg="bg-blue-d1" carousel="carousel" />
    </section>
    <section class="section-wrapper d-xs-none d-sm-none d-lg-block">
        @include('components/viewed-the-product')
    </section>
    <section class="position-fixed bottom-0 w-100 d-lg-none bg-white py-3 shadow00" style="z-index:999;">
        <div class="row px-3 justify-content-center align-items-center gap-1 fs-xs-12px">
            <div class="col-3 text-bule204 d-flex gap-2 justify-content-center border-bule204 rounded-3 py-2 px-0">
                <div><i class="bi bi-chat-square-text"></i></div>
                <div>Chat ngay</div>
            </div>
            <div class="col-4 text-bule204 d-flex gap-2 justify-content-center border-bule204 rounded-3 py-2 px-0">
                <div><i class="bi bi-cart-dash"></i></div>
                <div>Thêm vào giỏ</div>
            </div>
            <div class="col-5 rounded-3 py-2 px-0 text-center text-white bg-orange-fbb">
                Chọn mua
            </div>
        </div>
    </section>
</div>
@endsection