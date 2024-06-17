<link href="{{ asset('css/pages/product-detail/product-des.css') }}" rel="stylesheet">
<div class="bg-white rounded-3 box-p product-des">
    <div>
        <ul class="row pb-3 list-none ps-0 product-des-title border-bottom" id="productTab" role="tablist">
            @foreach(
            ['Mô tả sản phẩm','Thông số sản phẩm','Đánh giá','Hỏi đáp'] as $index => $tab
            )
            <li class="col text-bule204 fw-semibold mb-0 {{ $index !== 3 ? 'border-end' : '' }} {{ $index !== 0 ? 'text-center' : '' }}">{{ $tab }}</li>
            @endforeach
        </ul>
    </div>
    <div class="tab-content" id="productTabContent">
        <div class="product-des-content-wrap tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
            <div class="product-des-content position-relative">
                <div>
                    <h5 class="mt-3 mb-3 text-bule204 fw-semibold">Bột ngũ cốc mẹ bầu Babba's Mommy 270g bổ sung dưỡng chất thiết yếu cho mẹ và bé</h5>
                    <div>
                        <span style="color:#00BAF2;">Bột ngũ cốc</span> Babba's Mommy dành cho mẹ bầu cung cấp đầy đủ dưỡng chất thiết yếu, giúp tăng cường sức khỏe cho phụ nữ mang thai và cho con bú, hỗ trợ sự phát triển toàn diện của trẻ.
                    </div>
                    <div class="text-center">
                        <img src="https://cdn-v2.kidsplaza.vn/media/wysiwyg/product/do-cho-me/ngu-coc-bau/bot-ngu-coc-me-bau-babba-s-mommy-270g-1.jpg" width="65%" height="auto" alt="Bột ngũ cốc mẹ bầu Babba's Mommy">
                    </div>
                </div>
                <div>
                    <h5 class="mt-3 mb-3 text-bule204 fw-semibold">Thành phần ngũ cốc mẹ bầu Babba's Mommy 270g</h5>
                    <p>Thành phần: Bột gạo trắng, đường, bột đậu phộng chế biến 17% (xi-rô bột bắp, bơ đậu phộng, dầu cọ, natri caseinate, kali diphosphate, muối), bột ngô, kem whey (xi-rô bột bắp, dầu dừa, bột whey, kali diphosphate), bột đậu nành, óc chó 2.7%, hạnh nhân 2.7%, muối, các loại vitamin và khoáng chất (axit folic, vitamin E, vitamin B1, vitamin B2, vitamin B6, vitamin D3, biotin, canxi, kẽm).</p>
                    <div class="text-center">
                        <img src="https://cdn-v2.kidsplaza.vn/media/wysiwyg/product/do-cho-me/ngu-coc-bau/bot-ngu-coc-me-bau-babba-s-mommy-270g-2.jpg" width="65%" height="auto" alt="Bột ngũ cốc mẹ bầu Babba's Mommy">
                    </div>
                </div>
                <div>
                    <h5 class="mt-3 mb-3 text-bule204 fw-semibold">Đặc điểm nổi bật của ngũ cốc mẹ bầu Babba's Mommy 270g</h5>
                    <ul class="lh-lg">
                        <li>Bột ngũ cốc Babba’s Mommy dành cho mẹ bầu cung cấp đầy đủ dưỡng chất thiết yếu, giúp tăng cường sức khỏe cho phụ nữ mang thai và cho con bú, hỗ trợ sự phát triển toàn diện của trẻ.</li>
                        <li>Được làm từ các loại hạt bổ dưỡng như óc chó, hạnh nhân, đậu phộng, đậu nành, ngô, gạo, sản phẩm giàu protein thực vật và lipid, rất tốt cho mẹ bầu/mẹ sau sinh.</li>
                        <li>Chất xơ tự nhiên có trong bột ngũ cốc Babba’s Mommy giúp giảm táo bón, duy trì hệ tiêu hóa khỏe mạnh cho mẹ.</li>
                        <li>Được bổ sung các vitamin & khoáng chất cần thiết cho phụ nữ mang thai và cho con bú (axit folic, omega 3, omega 6, canxi, sắt, kẽm, vitamin E, vitamin B1, vitamin B2, vitamin B, biotin).</li>
                        <li>Sản phẩm giúp phát triển não bộ, thị lực và hệ xương khớp của thai nhi, giúp bé tăng trọng lượng và khỏe toàn diện.</li>
                        <li>Được làm từ các thành phần tự nhiên, không chất bảo quản.</li>
                        <li>Vị ngon, không quá ngọt, mẹ bầu bị nghén cũng dễ uống.</li>
                        <li>Mẹ nên dùng 2-3 ly bột ngũ cốc Babba’s Mommy mỗi ngày.</li>
                        <li>Phụ nữ dị ứng với bất kỳ thành phần nào của bột nên tham khảo ý kiến bác sĩ trước khi dùng.</li>
                    </ul>
                </div>
                <div>
                    <h5 class="mt-3 mb-3 text-bule204 fw-semibold">Hướng dẫn sử dụng bột ngũ Babba's Mommy</h5>
                    <p>Hướng dẫn sử dụng: Hòa tan 1 gói ngũ cốc Babba’s Mommy vào 90 ml nước nóng (khoảng 90°C) và khuấy đều. Có thể thay thế nước bằng sữa tươi hoặc sữa đậu nành. Nên uống 2-3 ly/ngày. Sản phẩm ít đường, dùng được cho phụ nữ mang thai và cho con bú. Mẹ sau sinh uống trước khi cho con bú 30 phút để tăng chất lượng sữa.</p>
                    <p><b>Bảo quản:</b> nơi khô ráo, mát mẻ, tránh ánh nắng trực tiếp.</p>
                    <p><b>Khuyến cáo:</b> Người bị dị ứng với hạt nên kiểm tra kĩ thành phần trước khi sử dụng sản phẩm này.</p>
                </div>
                <div>
                    <h5 class="mt-3 mb-3 text-bule204 fw-semibold">Thông tin chi tiết sản phẩm</h5>
                    <ul class="lh-lg list-none ps-0">
                        <li><b>Tên sản phẩm:</b> Bột ngũ cốc mẹ bầu Babba's Mommy</li>
                        <li><b>Xuất xứ:</b> Hàn Quốc</li>
                        <li><b>Thương hiệu:</b> Hàn Quốc</li>
                        <li><b>Độ tuổi sử dụng:</b> Mẹ bầu và cho con bú</li>
                        <li><b>HSD:</b> 12 tháng kể từ ngày sản xuất. Hạn sử dụng in trên bao bì sản phẩm (năm/tháng/ngày).</li>
                        <li><b>Khối lượng tịnh:</b> 270 g/hộp (15 gói x 18 g).</li>
                    </ul>
                </div>
                <div class="position-absolute product-des-bg"></div>
            </div>
            <div class="product-des-see-more d-flex justify-content-center align-items-center gap-2 text-bule204 cup mt-4">
                <span class="fw-semibold">Rút gọn</span>
                <i class="bi bi-chevron-right"></i>
            </div>
        </div>
    </div>
</div>