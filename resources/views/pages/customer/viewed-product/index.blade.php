@section('title-customer', 'Sản phẩm đã xem')
@extends('layouts-customer')
@section('style-customer')
<link rel="stylesheet" href="">
@endsection
@section('content-customer')
<<<<<<< HEAD
<div class="customer-viewed-product row justify-content-between gap-3 mx-1">
=======
<div class="customer-viewed-product row gap-3 mx-1">
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
    @foreach([1,2,3,4,5] as $key => $item)
    <div class="col-3 px-0 item">
        @include('components/product-display')
    </div>
    @endforeach
</div>
@endsection