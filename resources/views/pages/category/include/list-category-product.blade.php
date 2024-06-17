<div>
    <div class="d-md-none-x">
        <div class="d-flex flex-wrap gap-3 box-m-top-bottom">
            @foreach(
            ['Khoảng giá','Dung tích','Độ tuổi','Màu sắc',
            'Xuất xứ', 'Thương hiệu', 'Khối lượng','Kích thước']
            as $key => $propertie
            )
            <div class="w-fit-content cup bg-yellowff-hover gap-3 d-flex justify-content-center align-items-center bg-white rounded-5 py-2 px-3 text-bule204">
                <div>{{ $propertie }}</div>
                <div>
                    <i class="bi bi-chevron-down"></i>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="box-m-top-bottom box-p bg-white rounded-4">
        <div class="d-md-none-x">
            <div class="d-flex justify-content-between align-items-center">
                <x-title-frame-web :title="'Mẹ bầu và sau sinh'" :nav="['']" />
                <div class="fw-semibold text-bule204 d-flex align-items-center gap-2">
                    <i class="bi bi-filter"></i>
                    <div class="fs-6">Sắp xếp theo</div>
                </div>
            </div>
        </div>
        <div class="row box-m-top-bottom justify-content-center">
            @foreach([1,2,3,4,5,6,7,8,9,10,11,12] as $key => $product)
            <div class="col-xl-3 col-lg-3 col-sm-6 col-xs-6 list-product-item px-0">
                <div class="p-2">
                    @include('components/product-display')
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex gap-2 align-items-center justify-content-center">
            <div class="rounded-5 bg-bule204-hover cup border text-bule204 shadow00 text-center py-1" style="width:34px">
                <i class="bi bi-chevron-left"></i>
            </div>
            <div class="d-flex gap-2 align-items-center">
                @foreach([1,2,3,4,5,6,7] as $key => $item)
                <div class="rounded-5 bg-bule204-hover cup border {{ $key === 0 ? 'bg-bule204 text-white' : 'bg-white text-bule204' }} text-center  shadow00 py-1" style="width:34px">
                    {{ $item }}
                </div>
                @endforeach
            </div>
            <div class="rounded-5 bg-bule204-hover cup border text-bule204 shadow00 text-center py-1" style="width:34px">
                <i class="bi bi-chevron-right"></i>
            </div>
        </div>
    </div>
</div>