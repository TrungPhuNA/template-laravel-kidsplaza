@section('style-layout')
    <link href="{{ asset('css/pages/product-detail/product-detail.css') }}" rel="stylesheet">
@endsection

@php
    $data_products = json_decode(file_get_contents(storage_path('products.json')), true);
    $viewd_product = $data_products['viewd_product'];
    $products_just_for_you = $data_products['products_just_for_you'];
@endphp

@extends('layouts')
@section('title', 'Chi tiết sản phẩm')
@section('content')

<div class="position-relative">
    <div class="container px-0">
        <x-breadcrumb />
        <section class="section-wrapper">
            <div class="row">
                <div class="col-xl-9 col-lg-12">
                    <div class="d-xs-none d-sm-none d-lg-block">
                        @include('pages/product-detail/include/product-view')
                    </div>
                    <section class="section-wrapper d-lg-none">
                        @include('pages/product-detail/include/product-view')
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
                                @foreach(
                                    [
                                    [
                                        'img' => 'https://cdn.kidsplaza.io/assets/icons/icon-kicoin.png',
                                        'text' => 'Tích lũy 8% KiCoin'
                                    ],
                                    [
                                        'img' => 'https://cdn.kidsplaza.io/assets/icons/circle-45.png',
                                        'text' => 'Đổi trả trong 15 ngày'
                                    ],
                                    [
                                        'img' => 'https://cdn.kidsplaza.io/assets/icons/free-ship.png',
                                        'text' => 'Freeship phạm vi 7km'
                                    ],
                                    [
                                        'img' => 'https://cdn.kidsplaza.io/assets/icons/icon-commit.png',
                                        'text' => 'Cam kết chính hãng'
                                    ]
                                ] as $item)
                                <li class="fw-semibold">
                                    <img class="me-2" width="30" height="30" src="{{ $item['img'] }}" alt="Icon">
                                    {{ $item['text'] }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-12">
                    @include('pages/product-detail/include/product-des')
                    @include('pages/product-detail/include/product-param')
                    @include('pages/product-detail/include/product-review')
                    @include('pages/product-detail/include/product-question')
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
    <div class="d-xs-none d-sm-none d-lg-block">
        <x-products-just-for-you bg="bg-blue-d1" :data="$products_just_for_you" carousel="carousel" />
    </div>
    <div class="d-sm-none d-lg-block">
        @include('components/viewed-the-product',[
            'products' => $viewd_product,
        ])
    </div>
    <x-bottom-nav-bar page="product-detail" :data="[]" />
</div>
@endsection