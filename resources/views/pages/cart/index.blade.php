@extends('layouts')
@section('title', 'Giỏi hàng Kidsplaza')
@section('content')
<div class="container pb-4">
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-12 bg-white rounded-4 box-p">
            <div class="fs-4 fw-semibold text-bule204 border-bottom pb-2 mb-2">Giỏ hàng</div>
            <div>
                <div class="row mx-1 mt-3">
                    <div class="col-6 fs-5 px-0 text-bule204">Sản phẩm</div>
                    <div class="col-2 text-center fs-5 px-0 text-bule204">Đơn giá</div>
                    <div class="col-2 text-center fs-5 px-0 text-bule204">Số lượng</div>
                    <div class="col-2 text-end fs-5 px-0 text-bule204">Thành tiền</div>
                </div>
                <div class="mt-4">
                    <div class="row align-items-center">
                        <div class="col-6 d-flex gap-3 align-items-center">
                            <div>
                                <img class="border p-2 rounded-3" src="https://cdn-v2.kidsplaza.vn/202x202/media/catalog/product/v/i/vitamin-d3-k2-mk7-sunday-natural-20ml-1.jpg" width="80" height="auto" />
                            </div>
                            <div>Vitamin D3K2 MK7 Sunday <br /> Natural 20ml của Đức</div>
                        </div>
                        <div class="col-2 text-center fw-semibold">
                            265.000đ
                        </div>
                        <div class="col-2 text-center ">
                            <div class="d-flex justify-content-center gap-3 w-80 mx-auto border rounded-5 shadow-sm py-1">
                                <div class="">-</div>
                                <div class="">1</div>
                                <div class="">+</div>
                            </div>
                        </div>
                        <div class="col-2 text-end">
                            <div>265.000đ</div>
                            <div style="font-size:14px;" class="text-danger">Xóa</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="box-p bg-white rounded-4 mb-4">
                <div class="text-bule204 fw-semibold fs-5">Mã giảm giá</div>
                <div class="row align-items-center  mt-3 mx-1">
                    <div class="col-8 px-0 ">
                        <input class="w-100 py-3 px-3 rounded-start border" type="text" placeholder="Nhập mã giảm giá" style="background-color:#F2F2F7;" />
                    </div>
                    <div class="col-4 px-0 text-center bg-bule204 fs-6 py-3 text-white fw-semibold rounded-end">
                        ÁP DỤNG
                    </div>
                </div>
                <div class="py-3 w-100 mx-1 text-center mt-3 fs-6 fw-semibold text-bule204 bg-bule204-hover cup rounded-3" style="border: 1.5px solid #204099">
                    CHỌN MÃ
                </div>
            </div>
            <div class="box-p bg-white rounded-4 mb-4">
                <div class="text-bule204 fw-semibold fs-5">Sử dụng Kicoin</div>
                <div class="d-flex align-items-center justify-content-between fs-6 mt-2">
                    <div class="fw-semibold">Dùng 0 KiCoin</div>
                    <div class="form-check form-switch">
                        <input class="form-check-input px-3 py-2 bg-gray-f2" type="checkbox" role="switch" id="flexSwitchCheckChecked" >
                    </div>
                </div>
            </div>
            <div class="box-p bg-white rounded-4 mb-4">
                <div class="text-bule204 fw-semibold fs-5 text-center">Thông tin đơn hàng</div>
                <div class="mt-2 fw-semibold">
                    <div class="d-flex align-items-center justify-content-between border-bottom p-2 mb-2">
                        <h6>Tổng sản phẩm</h6>
                        <div>265.000đ</div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between border-bottom p-2 mb-2">
                        <h6>Phí vận chuyển</h6>
                        <div>Chưa tính</div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between p-2 mb-2">
                        <h6>Tạm tính</h6>
                        <div class="text-danger">265.000đ</div>
                    </div>
                    <div class="w-100 text-center">  
                    <button class="w-80 mx-auto border-0 bg-bule204 text-white py-2 rounded-2" type="button">TIẾP TỤC</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

