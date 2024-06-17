@extends('layouts')
@section('content')
<link href="{{ asset('css/pages/home/home.css') }}" rel="stylesheet">
<div class="position-relative">
    <div class="container px-0">
        <section class="section-wrapper">
            @php
            $user = auth()->user();
            @endphp
            @include('pages/home/include/header', ['user' => $user])
        </section>
        <section class="section-wrapper">
            @include('pages/home/include/service-banner')
        </section>
        <section class="section-wrapper">
            @include('pages/home/include/outstan-category')
        </section>
    </div>
    <section class="section-wrapper">
        @include('pages/home/include/outstan-brand')
    </section>
    <section class="section-wrapper d-xs-none">
        <div class="banner-home-owl-carousel owl-carousel owl-theme container px-0">
            @foreach([
            'https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/h/e/healthy_care_t5-web_m_i_banner_danh_m_c_l_n_web-1.png',
            'https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/s/k/skinny-bn_mebaudenlatang_1.jpg',
            'https://cdn-v2.kidsplaza.vn/media/mageplaza/bannerslider/banner/image/1/2/1204x250_1.png'
            ] as $banner)
            <img class="rounded-4 " src="{{$banner}}" alt="img" width="100%" height="250">
            @endforeach
        </div>
    </section>
    <section class="section-wrapper">
        @include('pages/home/include/list-product')
    </section>
    <section class="section-wrapper">
        <x-frame-product-layout-display :title="'Bỉm tã và vệ sinh'" :nav="['Tã - Bỉm Goon', 'Tã - Bỉm Merries', 'Tã - Bỉm Huggies', 'Tã - Bỉm Bobby', 'Tã - Bỉm Moony']" :banner="[
        ['col' => 'col-7', 'src' => 'images/banner/KV_Moony_T6.png'], 
        ['col' => 'col', 'src' => 'images/banner/KV_Huggies_xanh.png']
    ]" :properties="[['Việt Nam', 'Nhật Bản', 'Trung Quốc', 'Italia', 'Hàn Quốc'], ['M', 'L', 'XL', 'NB', 'S', 'XXL']]" />
    </section>
    <section class="section-wrapper">
        <x-frame-product-layout-display :title="'Sữa cho bé'" :nav="['Sữa Meiji','Sữa Morinaga','Sữa Nan','Sữa Aptamil','Sữa Pediasure','Sữa Similac']" :banner="[
        ['col' => 'col', 'src' => 'images/banner/sua_cho_be_banner_1.png'], 
        ['col' => 'col-7', 'src' => 'images/banner/sua_cho_be_banner_2.png']
    ]" :properties="[['Việt Nam', 'Nhật Bản', 'Hàn Quốc', 'Thái Lan', 'Thủy Sĩ'], ['6M+','1Y+','0-6M','0-12M','6-12M','1-3Y']]" />
    </section>
    <section class="section-wrapper">
        <x-products-just-for-you bg="bg-blue-d1" carousel="" />
    </section>
    <section class="section-wrapper">
        @include('pages/home/include/useful-information')
    </section>
    <section class="section-wrapper">
        @include('components/many-search-keyword')
    </section>
    <section class="position-fixed bottom-0 w-100 d-sm-none bg-white py-3 shadow00" style="z-index:999;">
        <div class="row">
            @foreach(
            [
            ['icon' => 'https://cdn.kidsplaza.io/assets/icons/kid-logo-circle.png', 'title' => 'Trang chủ'],
            ['icon' => 'https://cdn.kidsplaza.io/assets/icons/inactive-category.png', 'title' => 'Danh mục'],
            ['icon' => 'https://cdn.kidsplaza.io/assets/icons/inactive-gift.png', 'title' => 'Khuyến mãi'],
            ['icon' => 'https://cdn.kidsplaza.io/assets/icons/inactive-account.png', 'title' => 'Tôi']
            ] as $key => $item
            )
            <div class="col-3 text-center position-relative">
                @if($key === 0)
                <div class="" style="height:34px;">
                    <div class="position-absolute bg-white rounded-5 p-3" style="left:28%;top:-48%">
                        <img class="" src="{{ $item['icon'] }}" width="34" height="34" alt="" />
                    </div>
                </div>
                @else
                <img src="{{ $item['icon'] }}" width="34" height="34" alt="" />
                @endif
                <div class="mt-2 {{ $key !== 0 ? 'text-gray-rgb1' : ''}}" style="font-size:11px;">{{ $item['title'] }}</div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection