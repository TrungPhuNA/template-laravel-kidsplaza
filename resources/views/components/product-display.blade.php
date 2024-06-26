<link href="{{ asset('css/components/product-display.css') }}" rel="stylesheet">
<<<<<<< HEAD
@php 
    $name = $product['name'] ?? '';
    $nameLength = strlen($name);
    if($nameLength > 52){
        $name = substr($name,0,52).'...';
    }
    $price = $product['price'] ?? 0;
    $formatted_price = number_format($price, 0, '', '.');
    $price_discount = $price - ($price * ($product['discount'] ?? 0) / 100);
    $formatted_price_discount = number_format($price_discount, 0, '', '.')
@endphp
<div id="{{ $product['id'] ?? '' }}" class="product-display position-relative bg-white rounded-4 shadow00" data-bs-toggle="modal" data-bs-target="#productDisplay">
=======

<div class="product-display position-relative bg-white rounded-4 shadow00" data-bs-toggle="modal" data-bs-target="#productDisplay">
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
    <div class="product-display-tag text-white">
        <div class="fw-semibold py-1 px-2 mb-1">Sale</div>
        <div class="fw-semibold py-1 px-2">New</div>
    </div>
    <div class="row product-display-detail align-items-center justify-content-center pt-4 pb-3 px-3">
        <div class="col-10 product-display-detail-col-left cup text-center">
<<<<<<< HEAD
            <img src="{{ $product['img'] ?? ''}}" width="85%" height="auto" />
        </div>
        <div class="col product-display-detail-col-right mt-2">
            <div style="height:67px;">
                <div class="product-display-detail-col-right-name text-bule204-hover cup">
                    <a href="{{ '/category/bim-ta-quan-megumi-sizem-m-50-mieng' }}" class="">
                        {{$name}}
                    </a>
                </div>
                <span class="">by <i class="cup" style="color:#23C4F4;">{{ $product['author'] ?? '' }}</i></span>
            </div>
            
            <div style="height:50px;">
                <div class="fs-5 fw-semibold" style="color:#FF7032;">{{ 
                    $product['discount'] ?? 0 > 0 ?  $formatted_price_discount : $formatted_price 
                }}đ</div>
                @if($product['discount'] ?? 0 > 0)
                    <div class="d-flex gap-3 product-display-detail-col-right-discount">
                        <div class="text-secondary">{{ $formatted_price  }}đ</div>
                        <div class="fw-semibold px-2 rounded-5">-{{ $product['discount'] ?? 0 }}%</div>
                    </div>
                @endif
            </div>
            <div class="mt-2 d-flex gap-2">
                <div class="rounded-5 cup" style="border:1px solid #23C4F4;"><img src="{{ asset('images/fundiin-logo.png') }}" alt="" width="34" height="34"></div>
                <div class="rounded-5 cup border"><img src="{{ asset('images/vnpay-logo.png') }}" alt="" width="34" height="34"></div>
                <div class="rounded-5 cup border"><img src="{{ asset('images/shopeepay-logo.png') }}" alt="" width="34" height="34"></div>
                <div class="rounded-5 cup border"><img src="{{ asset('images/zalo.png') }}" alt="" width="34" height="34"></div>
            </div>
            <div class="product-display-detail-col-right-sub mt-2 mb-4">
                <div class="text-secondary">{{ $product['sub'] ?? 'Giảm 50% tối đa 100K - Trả sau 0% lãi suất' }}</div>
=======
            <img src="https://cdn-v2.kidsplaza.vn/202x202/media/catalog/product/b/i/bim-ta-quan-megumi-size-m-50-mieng-cho-be-6-12-kg-1.jpg" width="85%" height="auto" />
        </div>
        <div class="col product-display-detail-col-right mt-2">
            <div class="product-display-detail-col-right-name text-bule204-hover cup">
                <a href="{{ '/category/bim-ta-quan-megumi-sizem-m-50-mieng' }}" class="">
                    Bỉm - Tã quần Megumi size M 50 miếng (cho bé 6-12 kg)
                </a>
            </div>
            <span class="">by <i class="cup" style="color:#23C4F4;">Aptamil</i></span>
            <div class="fs-5 fw-semibold" style="color:#FF7032;">691.000đ</div>
            <div class="d-flex gap-3 product-display-detail-col-right-discount">
                <div class="text-secondary">260.000đ</div>
                <div class="fw-semibold px-2 rounded-5">-19%</div>
            </div>
            <div class="mt-2 d-flex gap-2">
                <div class="rounded-5 cup" style="border:1px solid #23C4F4;"><img src="{{ asset('images/fundiin-logo.png') }}" alt="" width="30" height="auto"></div>
                <div class="rounded-5 cup border"><img src="{{ asset('images/vnpay-logo.png') }}" alt="" width="30" height="auto"></div>
                <div class="rounded-5 cup border"><img src="{{ asset('images/shopeepay-logo.png') }}" alt="" width="30" height="auto"></div>
                <div class="rounded-5 cup border"><img src="{{ asset('images/zalo.png') }}" alt="" width="30" height="auto"></div>
            </div>
            <div class="product-display-detail-col-right-sub mt-2">
                <div class="text-secondary"><b>Fundiin -</b> Giảm thêm 50% tối đa 100K - Đơn hàng từ 0đ</div>
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
                <div class="text-secondary">Chưa có đánh giá</div>
            </div>
        </div>
    </div>
    <div class="position-absolute product-display-cart rounded-5 py-1 px-2 cup">
        <i class="bi bi-cart-plus text-white fs-4"></i>
    </div>
</div>

<script src="{{ asset('js/components/product-display.js') }}"></script>