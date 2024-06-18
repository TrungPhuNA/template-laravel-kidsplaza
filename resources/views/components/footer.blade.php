<footer class="d-xs-none">
    <div>
        <img src="{{ asset('images/banner/banner-footer.png') }}" width="100%" alt="">
    </div>
    <div class="container mb-3 mt-5 footer px-0">
        <div class="row footer-top">
            <div class="col-xl-4 col-lg-6 col-md-6 footer-top-col-one">
                <div>
                    <img src="{{ asset('images/Logo_footer.png') }}" alt="logo" width="65%" height="auto">
                </div>
                <ul class=" mt-3">
                    <li><b>Đơn vị chủ quản:</b> Công ty Cổ phần Kids Plaza</li>
                    <li><b>Địa chỉ:</b> 20 Thái Thịnh, P. Ngã Tư Sở, Đống Đa, Hà Nội.</li>
                    <li><b>Điện thoại:</b> (024) 7300 0088</li>
                    <li><b>Email:</b> contact@kidsplaza.vn</li>
                    <li><b>Mã số thuế / Mã số doanh nghiệp:</b> 0105330703 <br /> do Sở KHĐT Hà Nội cấp ngày 26/05/2011.</li>
                </ul>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 footer-top-col-two pt-4">
                <div class="mb-2 text-bule204 fw-semibold">VỀ KIDSPLAZA</div>
                <ul>
                    @foreach(
                    ['Giới thiệu KidsPlaza', 'Danh sách cửa hàng', 'Báo chí nói về chúng tôi', 'Kiến thức nuôi con', 'Tuyển dụng', 'Chính sách bảo mật', 'Chính sách Kicoin']
                    as $item
                    )
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 footer-top-col-three pt-4">
                <div class="mb-2 text-bule204 fw-semibold">HỖ TRỢ KHÁCH HÀNG</div>
                <ul>
                    @foreach(
                    ['Quy định đổi trả hàng', 'Phương thức thanh toán', 'Phương thức giao hàng', 'Lớp học tiền sản miễn phí', 'Lớp học ăn dặm miễn phí', 'Gửi góp ý / Khiếu nại', 'Chính sách bảo hành', 'Câu hỏi thường gặp']
                    as $item
                    )
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-xl col-lg-12 col-md footer-top-col-four pt-4">
                <div class="mb-5 new_gift">
                    <div class="mb-3 text-bule204 fw-semibold">NHẬN TIN KHUYẾN MÃI & QUÀ</div>
                    <div class="d-flex gap-2 align-items-center">
                        <input type="text" class="form-control py-2" placeholder="Nhập địa chỉ email của bạn">
                        <x-button class="px-3 py-2 border-0 rounded-2 text-white" text="Áp dụng" icon="" iconPosition="right" />
                    </div>
                </div>
                <div>
                    <div class="mb-2 text-bule204 fw-semibold">PHƯƠNG THỨC THANH TOÁN</div>
                    <div class="d-flex flex-wrap gap-3">
                        @foreach(
                        ['visa-rectangle-icon', 'master-card-rectangle-icon', 'cash-rectangle-icon', 'JCB-rectangle-icon', 'momo-rectangle-icon', 'banking-icon', 'cod-icon', 'vn-pay-icon', 'zalo-pay-icon', 'shopee-pay-icon']
                        as $item
                        )
                        <img src="{{ asset('images/icons/' . $item . '.png') }}" alt="{{ $item }}" loading="lazy" width="65" height="auto" decoding="async" data-nimg="1">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer-bottom mt-3">
            <div class="col">
                <div class="mb-2 text-bule204 fw-semibold">KẾT NỐI VỚI CHÚNG TÔI</div>
                <div class="d-flex flex-warp gap-3">
                    @foreach(
                    ['facebook-round-icon', 'youtube-round-icon', 'tiktok-round-icon', 'shopee-round-icon']
                    as $item
                    )
                    <img src="{{ asset('images/icons/' . $item . '.png') }}" alt="{{ $item }}" width="45" height="auto">
                    @endforeach
                </div>
            </div>
            <div class="col">
                <div class="text-bule204 fw-semibold">CHỨNG NHẬN CHẤT LƯỢNG</div>
                <img src="{{ asset('images/quality-certificate.png') }}" alt="iso-icon" width="196" height="auto">
            </div>
            <div class="col">
                <div class="mb-3 text-bule204 fw-semibold">HÌNH THỨC VẬN CHUYỂN</div>
                <div class="d-flex flex-warp gap-3">
                    @foreach(
                    ['ghtk-rectangle-icon', 'ghn-rectangle-icon', 'ahamove-rectangle-icon']
                    as $item
                    )
                        <img src="{{ asset('images/icons/' . $item . '.png') }}" alt="ghtk" width="70" height="auto">
                    @endforeach
            
                </div>
            </div>
        </div>
        <div class="mt-4" style="font-size:13px;">Bản quyền © 2024 Kids Plaza - Hệ thống cửa hàng Mẹ Bầu và Em Bé Kids Plaza.</div>
    </div>
</footer>