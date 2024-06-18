@extends('layouts')
@section('style-layout')
    <link href="{{ asset('css/pages/home/home.css') }}" rel="stylesheet">
@endsection
@php
    $data_static = json_decode(file_get_contents(storage_path('app/database/data-static.json')), true);
    $banners = $data_static['banners'];
    $diapers_hygiene = $data_static['diapers_hygiene'];
    $milk_for_babie = $data_static['milk_for_babie'];
    $mobile_bottom = $data_static['mobile_bottom'];
@endphp
@section('content')
    <div class="position-relative">
        <div class="container px-0">
            @include('pages/home/include/header')
            @include('pages/home/include/service-banner')
            @include('pages/home/include/outstan-category')
        </div>
        @include('pages/home/include/outstan-brand')
        <section class="section-wrapper d-xs-none">
            <div class="banner-home-owl-carousel owl-carousel owl-theme container px-0">
                @foreach($banners as $banner)
                    <img class="rounded-4 " src="{{$banner}}" alt="img" width="100%" height="250">
                @endforeach
            </div>
        </section>
        @stack('link-style-list-product')
        @include('pages/home/include/list-product')
        <x-frame-product-layout-display :title=" $diapers_hygiene['title'] " :nav=" $diapers_hygiene['nav'] " :banner=" $diapers_hygiene['banner'] " :properties=" $diapers_hygiene['properties'] " />
        <x-frame-product-layout-display :title=" $milk_for_babie['title'] " :nav=" $milk_for_babie['nav'] " :banner=" $milk_for_babie['banner'] " :properties=" $milk_for_babie['properties'] " />
        <x-products-just-for-you bg="bg-blue-d1" carousel="" />
        @include('pages/home/include/useful-information')
        @include('components/many-search-keyword')
        <x-bottom-nav-bar page="home" :data=" $mobile_bottom " />    
    </div>
@endsection