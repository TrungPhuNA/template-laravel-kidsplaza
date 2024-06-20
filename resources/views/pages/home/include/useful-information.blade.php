@push('link-style-home-useful-information')
    <link href="{{ asset('css/pages/home/useful-information.css') }}" rel="stylesheet">
@endpush

<section class="section-wrapper">
    <div class="container useful-information">
        <div class="d-flex justify-content-between align-items-center">
<<<<<<< HEAD
            <x-title-frame-web title="Thông tin bổ ích" :nav="['']" />
=======
            <x-title-frame-web :title="'Thông tin bổ ích'" :nav="['']" />
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
            <div class="fw-semibold text-bule204 d-flex align-items-center gap-2 useful-information-more">
                <div>Xem thêm các bài viết hay</div>
                <i class="bi bi-chevron-right"></i>
            </div>
        </div>
        <div class="useful-information-owl-carousel owl-carousel owl-theme box-m-top-bottom gap-3 useful-information"> <!-- row flex-nowrap overflow-hidden  -->
<<<<<<< HEAD
            @foreach($useful_info as $item)
            <div class="bg-white rounded-4 shadow-sm px-0 useful-information-item"> <!-- col col-xs-5  -->
                <div>
                    <img class="rounded-4" src="{{ $item['avatar'] }}" alt="" width="100%" height="136px" />
                </div>
                <div class="py-2 px-3 useful-information-content cup">
                    @php 
                        $name = $item['name'];
                        $nameLength = strlen($name);
                        if($nameLength > 90){
                            $name = substr($name,0,90).'...';
                        }
                    @endphp
                    <div>{{ $name }}</div>
                    <div class="d-flex align-items-center justify-content-between text-bule204 mt-1">
                        <div>Bởi <b> {{ $item['author'] }} </b></div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-eye"></i>
                            <div>{{ $item['views'] }}</div>
=======
            @foreach([1,2,3,4,5,6,7] as $item)
            <div class="bg-white rounded-4 shadow-sm px-0 useful-information-item"> <!-- col col-xs-5  -->
                <div>
                    <img class="rounded-4" src="https://www.kidsplaza.vn/blog/wp-content/uploads/2024/05/LANDING-01_01.png" alt="" width="100%" height="auto" />
                </div>
                <div class="py-2 px-3 useful-information-content cup">
                    <div>KidsPlaza SUPER PARTY cuối tuần Mừng Sinh Nhật 16 tuổi</div>
                    <div class="d-flex align-items-center justify-content-between text-bule204 mt-1">
                        <div>Bởi <b>Ngọc Ánh</b></div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-eye"></i>
                            <div>151</div>
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>