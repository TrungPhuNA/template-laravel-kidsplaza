<link rel="stylesheet" href="{{ asset('css/components/dropdown.css') }}">
<div class="dropdown">
    <div class="w-fit-content cup bg-yellowff-hover gap-2 d-flex justify-content-center align-items-center bg-white rounded-5 py-2 px-3 text-bule204 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <div>{{ $name }}</div>
    </div>
    @switch($name)
        @case('Khoảng giá')
            <div class="dropdown-menu rounded-3 p-3 shadow00">
                <div class="text-center text-bule204 fw-semibold">Chọn mức giá phù hợp với bạn</div>
                <div class="my-3" style="width:450px;">
                    <div id="loading-bar" class="my-3">
                        <div class="loading-bar-start"></div>
                        <div id="progress-bar"></div>
                        <div class="loading-bar-end"></div>
                    </div>
                    <div class="d-flex justify-content-between px-2 mt-2">
                        <div>Từ {{ $data['0'] }}đ</div>
                        <div>Đến {{ $data['1'] }}đ</div>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center align-items-center mt-3">
                    <div class="border border-2 w-40 py-2 text-center rounded-5 text-secondary">Bỏ chọn</div>
                    <div class="border w-40 py-2 text-center rounded-5 bg-orange-fbb text-white">Xem kết quả</div>
                </div>
            </div>
        @break
        @case('Dung tích')
        @case('Độ tuổi')
        @case('Xuất xứ')
        @case('Thương hiệu')
        @case('Khối lượng')
        @case('Kích thước')
            <div class="dropdown-menu rounded-3 p-3 shadow00">
                <ul class="list-none d-flex flex-wrap ps-0 gap-3 mb-0" style="width:450px;">
                    @foreach($data as $key => $item)
                    <li class="w-fit-content border border-2 p-1 rounded-3">
                        <a class="dropdown-item" href="#">
                            <div class="form-check">
                                <input class="form-check-input border-2" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $item }}
                                </label>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="d-flex gap-2 justify-content-center align-items-center mt-3">
                    <div class="border border-2 w-40 py-2 text-center rounded-5 text-secondary">Bỏ chọn</div>
                    <div class="border w-40 py-2 text-center rounded-5 bg-orange-fbb text-white">Xem kết quả</div>
                </div>
            </div>
        @break
        @case('Màu sắc')
            <div class="dropdown-menu rounded-3 p-3 shadow00">
                <ul class="list-none d-flex flex-wrap ps-0 gap-3 mb-0" style="width:450px;">
                    @foreach($data as $key => $item)
                    <li class="w-fit-content border border-2 p-1 rounded-3">
                        <a class="dropdown-item" href="#">
                            {{ $item }}
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="d-flex gap-2 justify-content-center align-items-center mt-3">
                    <div class="border border-2 w-40 py-2 text-center rounded-5 text-secondary">Bỏ chọn</div>
                    <div class="border w-40 py-2 text-center rounded-5 bg-orange-fbb text-white">Xem kết quả</div>
                </div>
            </div>
        @break
    @endswitch
</div>