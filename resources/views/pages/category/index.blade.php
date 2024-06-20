@php
    $data_static = json_decode(file_get_contents(storage_path('data-static.json')), true);
    $data_products = json_decode(file_get_contents(storage_path('products.json')), true);
    $category_product = $data_products['category_product'];
    $viewd_product = $data_products['viewd_product'];
    $products_just_for_you = $data_products['products_just_for_you'];
    $mobile_bottom = $data_static['mobile_bottom'];
@endphp

@extends('layouts')
@section('title', 'Danh mục sản phẩm')
@section('content')
    <div class="position-relative">
        <div class="container px-0">
            <x-breadcrumb />
            <div class="d-md-none-x">
                @include('pages/category/include/category')
            </div>
            @include('pages/category/include/brand')
            <div class="d-md-none-y">
                @include('pages/category/include/category')
            </div>
            @include('pages/category/include/list-category-product',[
                'products' => $category_product,
            ])
        </div>
        <div class="d-xs-none">
            <x-products-just-for-you bg="bg-blue-d1" :data="$products_just_for_you" carousel="carousel" />
        </div>
        @include('components/viewed-the-product',[
            'products' => $viewd_product,
        ])
        <div class="container section-wrapper">
            <div class="box-p bg-white rounded-3">
                Kidplaza cung cấp đầy đủ các sản phẩm cần thiết cho mẹ bầu và sau sinh như sữa bầu, quần áo bầu, vitamin, máy hút sữa...giúp việc mang thai và nuôi con trở nên đơn giản hơn.
            </div>
        </div>
        @include('components/many-search-keyword')
        <x-bottom-nav-bar page="home" :data=" $mobile_bottom " />
    </div>
@endsection