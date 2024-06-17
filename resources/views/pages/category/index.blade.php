@extends('layouts')
@section('title', 'Danh mục sản phẩm')
@section('content')
<div class="position-relative">
    <div class="container px-0">
        <div class="d-md-none-x">
            <div class="d-flex gap-2 align-items-center section-wrapper text-bule204">
                <div>
                    <a href="/" class="text-bule204">Trang chủ</a>
                </div>
                <div><i class="bi bi-chevron-right"></i></div>
                <div>Mẹ bầu và sau sinh</div>
            </div>
        </div>
        <section class="section-wrapper d-md-none-x">
            @include('pages/category/include/category')
        </section>
        <section class="section-wrapper">
            @include('pages/category/include/brand')
        </section>
        <section class="section-wrapper d-md-none-y">
            @include('pages/category/include/category',['size' => 'mobile'])
        </section>
        <section class="section-wrapper">
            @include('pages/category/include/list-category-product')
        </section>
    </div>
    <section class="section-wrapper d-xs-none">
        <x-products-just-for-you bg="bg-blue-d1" carousel="carousel" />
    </section>
    <section class="section-wrapper d-xs-none">
        @include('components/viewed-the-product')
    </section>
    <div class="container section-wrapper">
        <div class="box-p bg-white rounded-3">
            Kidplaza cung cấp đầy đủ các sản phẩm cần thiết cho mẹ bầu và sau sinh như sữa bầu, quần áo bầu, vitamin, máy hút sữa...giúp việc mang thai và nuôi con trở nên đơn giản hơn.
        </div>
    </div>
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