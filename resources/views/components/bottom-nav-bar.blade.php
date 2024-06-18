@switch($page)
    @case('home')
        <section class="position-fixed bottom-0 w-100 d-sm-none bg-white py-3 shadow00" style="z-index:999;">
            <div class="row">
                @foreach( $data as $key => $item)
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
    @break
    @case('product-detail')
    <section class="position-fixed bottom-0 w-100 d-lg-none bg-white py-3 shadow00" style="z-index:999;">
        <div class="row px-3 justify-content-center align-items-center gap-1 fs-xs-12px">
            <div class="col-3 text-bule204 d-flex gap-2 justify-content-center border-bule204 rounded-3 py-2 px-0">
                <div><i class="bi bi-chat-square-text"></i></div>
                <div>Chat ngay</div>
            </div>
            <div class="col-4 text-bule204 d-flex gap-2 justify-content-center border-bule204 rounded-3 py-2 px-0">
                <div><i class="bi bi-cart-dash"></i></div>
                <div>Thêm vào giỏ</div>
            </div>
            <div class="col-5 rounded-3 py-2 px-0 text-center text-white bg-orange-fbb">
                Chọn mua
            </div>
        </div>
    </section>
    @break
@endswitch