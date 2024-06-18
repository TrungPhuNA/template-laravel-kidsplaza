@section('title-customer', 'Sản phẩm yêu thích')
@extends('layouts-customer')
@section('style-customer')
<link rel="stylesheet" href="">
@endsection
@section('content-customer')
<div class="customer-favourite-product row gap-3 mx-1">
    @foreach([1,2,3,4,5] as $key => $item)
    <div class="col-3 px-0 item">
        @include('components/product-display')
    </div>
    @endforeach
</div>
@endsection