@extends('layouts')
@section('style-layout')
    <link href="{{ asset('css/pages/home/home.css') }}" rel="stylesheet">
@endsection
@section('content')
@php
    $data_static = json_decode(file_get_contents(storage_path('app/database/data-static.json')), true);
    $banners = $data_static['banners'];
    $diapers_hygiene = $data_static['diapers_hygiene'];
    $milk_for_babie = $data_static['milk_for_babie'];
    $mobile_bottom = $data_static['mobile_bottom'];
@endphp
<div class="position-relative">
    <div class="container px-0">
        <section class="section-wrapper">
            @include('pages/home/include/header')
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
            @foreach($banners as $banner)
                <img class="rounded-4 " src="{{$banner}}" alt="img" width="100%" height="250">
            @endforeach
        </div>
    </section>
    <section class="section-wrapper">
        @include('pages/home/include/list-product')
    </section>
    <section class="section-wrapper">
        <x-frame-product-layout-display :title=" $diapers_hygiene['title'] " :nav=" $diapers_hygiene['nav'] " :banner=" $diapers_hygiene['banner'] " :properties=" $diapers_hygiene['properties'] " />
    </section>
    <section class="section-wrapper">
        <x-frame-product-layout-display :title=" $milk_for_babie['title'] " :nav=" $milk_for_babie['nav'] " :banner=" $milk_for_babie['banner'] " :properties=" $milk_for_babie['properties'] " />
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
            @foreach( $mobile_bottom as $key => $item)
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