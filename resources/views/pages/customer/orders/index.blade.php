@section('title-customer', 'Quản lý đơn hàng')
@extends('layouts-customer')
@section('style-customer')
<link rel="stylesheet" href="{{ asset('css/customer/orders/index.css') }}">
@endsection
@section('content-customer')
<div class="customer-order">
    <div class="position-relative ms-auto" style="width:60%;">
        <div class="d-flex gap-2 justify-content-end">
            <input class="p-3 ps-5  w-100 border rounded-4" placeholder="Tìm kiếm theo tên sản phẩm, mã đơn hàng" />
            <div class="position-absolute start-0 p-3">
                <i class="bi bi-search fs-5 text-secondary"></i>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between gap-2 mt-4">
        @foreach(
        ['Tất cả','Chờ xử lý','Chờ thanh toán','Đang giao','Hoàn thành','Đã hủy']
        as $key => $item
        )
        <div class="w-fit-content py-2 px-4 rounded-3  {{ $key === 0 ? 'bg-bule204 text-white' : 'bg-gray-d6' }}">{{ $item }}</div>
        @endforeach
    </div>
    <div class="text-center mt-3 d-flex justify-content-center align-items-center" style="height:400px;">
        <div>
            <div class="mb-2">Bạn không có đơn hàng nào</div>
            <div class="w-fit-content mx-auto bg-bule204 py-2 px-3 rounded-3 text-white">Bắt đầu mua sắm</div>
        </div>
    </div>
</div>
@endsection