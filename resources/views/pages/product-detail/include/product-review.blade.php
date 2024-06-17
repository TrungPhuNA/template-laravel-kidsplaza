<div class="bg-white box-p rounded-4 mb-4">
    <div class="border-bottom pb-3 mb-3">
        <x-title-frame-web :title="'Đánh giá và nhận xét sản phẩm'" :nav="''" />
    </div>
    <div class="row align-items-center gap-2">
        <div class="col-2 col-xs-12">
            Chưa có đánh giá
        </div>
        <div class="col col-xs-12">
            @foreach(
            [
            ['star'=>5,'percent'=>0,'text'=>'Rất tốt'],
            ['star'=>4,'percent'=>0,'text'=>'Tốt'],
            ['star'=>3,'percent'=>0,'text'=>'Bình thường'],
            ['star'=>2,'percent'=>0,'text'=>'Không tốt'],
            ['star'=>1,'percent'=>0,'text'=>'Tệ'],
            ] as $item
            )
            <div class="row px-2">
                <div class="col-1 d-flex gap-1">
                    <div>{{$item['star']}}</div>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
                <div class="col d-flex align-items-center mr-2">
                    <div class="bar-category w-100 ">
                        <div class="progress " role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height:10px;">
                            <div class="progress-bar w-0"></div>
                        </div>
                    </div>
                    <div class="ms-2">
                        0
                    </div>
                </div>
                <div class="col-4">{{$item['text']}}</div>
            </div>
            @endforeach

        </div>
        <div class="col-4 col-xs-12">
            <div>Nhấn vào đây để nhận xét về sản phẩm</div>
            <div class="mt-2 text-center">
                <x-button class="px-4 py-2 border-0 rounded-3 text-white bg-orange-fbb" text="Đánh giá ngay" icon="" iconPosition="right" />
            </div>
        </div>
    </div>
</div>

<div class="bg-white box-p rounded-4">
    <div class="d-flex gap-3 align-items-center">
        <div>
            Chọn đánh giá của bạn
        </div>
        <div>
            @foreach([1,2,3,4,5] as $item)
            <i class="bi bi-star-fill fs-3 text-gray-f2 me-2"></i>
            @endforeach
        </div>
    </div>
    <div class="w-100 my-3 pb-3 border-bottom">
        <input class="w-75 p-3 rounded-3 border" placeholder="Nhập đánh giá về sản phẩm*" />
    </div>
    <div class="row align-items-center">
        <div class="col-xs-12 col-sm-3 border-end">Nhận xét từ người dùng</div>
        <div class="col-xs-12 col-sm-8 row gap-3 mx-1">
            <div class="col-2 bg-bule204 text-white px-2 py-1 text-center rounded-2">
                <div>Tất cả</div>
                <div>(0)</div>
            </div>
            @foreach(['5','4','3','2','1'] as $item)
            <div class="col bg-gray-f2 text-white px-2 py-1 text-center rounded-2">
                <div class="d-flex justify-content-center">
                    @foreach(range(1, $item)  as $star)
                        <i class="bi bi-star-fill text-warning me-1"></i>
                    @endforeach
                </div>
                <div class="text-black">(0)</div>
            </div>
            @endforeach
            <div class="col-2 bg-gray-f2 text-white px-2 py-1 text-center rounded-2">
                <div class="text-black">Có hình ảnh</div>
                <div class="text-black">(0)</div>
            </div>
        </div>
    </div>
</div>