<link href="{{ asset('css/components/modal.css') }}" rel="stylesheet">
<div class="modal fade" id="productDisplay" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex align-items-center modal-product w-100 py-2 mx-1">
                    <div class="text-center modal-product-left">
                        <img class="border p-2" src="https://cdn-v2.kidsplaza.vn/202x202/media/catalog/product/s/u/sua-aptamil-profutuna-kid-cesarbiotik-so-3-800g-2y-1.jpg" width="130" height="auto" />
                    </div>
                    <div class="px-0 modal-product-right">
                        <div class="lh-sm fw-semibold text-bule204 modal-product-right-title">Sữa Aptamil Profutura KID Cesarbiotik số 3 800g (2Y+)</div>
                        <div class="d-flex modal-product-right-sub my-1">
                            <div class="border-end border-2 pe-2 me-2">Thương hiệu: <span class="text-bule204">
                                    Aptamil
                                </span></div>
                            <div>SKU:
                                <span class="text-bule204">
                                    211110568
                                </span>
                            </div>
                        </div>
                        <div class="modal-product-right-reivew text-gray-rgb1">Chưa có đánh giá</div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="fw-semibold modal-product-right-price">
                                691.000đ
                            </div>
                            <div class="d-flex justify-content-center gap-3 modal-product-right-button gap-2">
                                <button class="rounded-3">
                                    Mua ngay
                                </button>
                                <button class="rounded-3">
                                    Thêm vào giỏi hàng
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body ">
                <div class="modal-product row">
                    <div class="col-xl col-lg p-4 pt-0 position-relative modal-product-left">
                        <div>
                            <img src="https://cdn-v2.kidsplaza.vn/media/catalog/product/s/u/sua-aptamil-profutuna-kid-cesarbiotik-so-3-800g-2y-2.jpg" width="100%" height="auto" />
                        </div>
                        <div class="list-img row align-items-center mb-4">
                            @foreach(
                            [
                            'https://cdn-v2.kidsplaza.vn/media/catalog/product/s/u/sua-aptamil-profutuna-kid-cesarbiotik-so-3-800g-2y-1.jpg',
                            'https://cdn-v2.kidsplaza.vn/media/catalog/product/s/u/sua-aptamil-profutuna-kid-cesarbiotik-so-3-800g-2y-2.jpg',
                            'https://cdn-v2.kidsplaza.vn/media/catalog/product/s/u/sua-aptamil-profutuna-kid-cesarbiotik-so-3-800g-2y-3.jpg',
                            'https://cdn-v2.kidsplaza.vn/media/catalog/product/s/u/sua-aptamil-profutuna-kid-cesarbiotik-so-3-800g-2y-3.jpg',
                            'https://cdn-v2.kidsplaza.vn/media/catalog/product/1/_/1.png'
                            ] as $img
                            )
                            <div class="img-item col text-center">
                                <img class="border p-2" src="{{ $img }}" width="70" height="auto" />
                            </div>
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-between d-sm-none d-lg-block">
                            <div class="d-flex align-items-center gap-2">
                                <div>Chia sẻ:</div>
                                <div>
                                    @foreach(
                                    ['https://www.kidsplaza.vn/assets/icons/messenger-icon.png','https://www.kidsplaza.vn/assets/icons/facebook-icon.png','https://www.kidsplaza.vn/assets/icons/twitter-icon.png'] as $icon
                                    )
                                    <img class="mx-1" src="{{ $icon }}" width="25" height="auto" />
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-heart fs-5 text-bule204"></i>
                                <div class="">
                                    Yêu thích <span class="text-bule204">(30)</span>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 text-white">
                            <div class="fw-semibold py-1 px-2 mb-1 bg-danger" style="border-bottom-left-radius:0.375rem;border-top-right-radius:0.375rem;">New</div>
                            <div class="py-1 px-3 bg-danger rounded-start">
                                <i class="bi bi-gift fs-6"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl col-lg ps-4 modal-product-right d-sm-none d-lg-block">
                        <div class="fs-3 lh-sm fw-semibold text-bule204 modal-product-right-title">Sữa Aptamil Profutura KID Cesarbiotik số 3 800g (2Y+)</div>
                        <div class="d-flex modal-product-right-sub my-1">
                            <div class="border-end border-2 pe-2 me-2">Thương hiệu: <span class="text-bule204">
                                    Aptamil
                                </span></div>
                            <div>SKU:
                                <span class="text-bule204">
                                    211110568
                                </span>
                            </div>
                        </div>
                        <div class="modal-product-right-reivew text-gray-rgb1">Chưa có đánh giá</div>
                        <div class="border-top border-bottom py-1 mt-2 fw-semibold modal-product-right-price">
                            691.000đ
                        </div>
                        <div class="mt-3">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('images/icons/active-gift.png') }}" alt="" width="25" height="auto" />
                                <div class="fw-semibold text-bule204 pt-1">Quà tặng</div>
                            </div>
                            <div class="my-2">
                                @foreach(
                                [
                                [
                                'title' => 'CTKM Aptamil T6: Mua 6 lon tặng 1 phần quà',
                                'children' => [
                                [
                                'title' => 'Xe đạp trẻ em Aptamil (Khuyến mại không bán)',
                                'img' => 'https://cdn-v2.kidsplaza.vn/media/catalog/product/x/e/xe-dap-tre-em-aptamil-khuyen-mai-khong-ban-1.jpg'
                                ]
                                ]
                                ],
                                [
                                'title' => 'CTKM Aptamil T6: Mua 4 lon tặng 1 phần quà',
                                'children' => [
                                [
                                'title' => 'Xe chòi chân có pin Aptamil (Khuyến mại không bán)',
                                'img' => 'https://cdn-v2.kidsplaza.vn/media/catalog/product/x/e/xe-choi-chan-co-pin-aptamil-khuyen-mai-khong-ban-1.jpg'
                                ],
                                [
                                'title' => 'Xe trượt scooter cho bé Aptamil (Khuyến mại không bán)',
                                'img' => 'https://cdn-v2.kidsplaza.vn/media/catalog/product/x/e/xe-truot-scooter-cho-be-aptamil-khuyen-mai-khong-ban-1.jpg'
                                ],
                                [
                                'title' => 'Vali kéo hình thú Aptamil (Khuyến mại không bán)',
                                'img' => 'https://cdn-v2.kidsplaza.vn/media/catalog/product/v/a/vali-keo-hinh-thu-aptamil-km-1.jpg'
                                ],
                                ]
                                ],
                                [
                                'title' => 'CTKM Aptamil T6: Mua 2 lon tặng 1 phần quà',
                                'children' => [
                                [
                                'title' => 'Phao bơi xỏ chân hình thú Aptamil (Khuyến mại không bán)',
                                'img' => 'https://cdn-v2.kidsplaza.vn/media/catalog/product/p/h/phao-boi-xo-chan-hinh-thu-aptamil-khuyen-mai-khong-ban-2.jpg'
                                ],
                                [
                                'title' => 'Đồ chơi lắp ráp bánh răng Aptamil (Khuyến mại không bán)',
                                'img' => 'https://cdn-v2.kidsplaza.vn/media/catalog/product/d/o/do-choi-lap-rap-banh-rang-aptamil-khuyen-mai-khong-ban-1.jpg'
                                ]
                                ]
                                ]

                                ] as $item
                                )
                                <div class="mb-2">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-heart-fill text-bule23 fs-5"></i>
                                        <div class="ms-1">{{ $item['title'] }}</div>
                                    </div>
                                    @foreach($item['children'] as $child)
                                    <div class="form-check d-flex align-items-center gap-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <div class="d-flex align-items-center gap-3 ">
                                            <div>
                                                <img class="p-2 border rounded-3" src="{{ $child['img'] }}" width="50" height="auto" />
                                            </div>
                                            <div style="font-size:13px;">
                                                {{ $child['title'] }}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>
                            <div class="d-flex justify-content-center gap-3 modal-product-right-button gap-2 mt-3">
                                <button class="px-5 py-2 rounded-3">
                                    Mua ngay
                                </button>
                                <button class="px-5 py-2 rounded-3">
                                    Thêm vào giỏi hàng
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-product-des overflow-hidden">
                    <div class="fs-4 fw-bold text-bule204 border-bottom border-2 pb-2 mb-3">Mô tả sản phẩm</div>
                    <div>
                        <p class="text-bule204 fw-semibold fs-5">Sữa Aptamil Profutura KID Cesarbiotik số 3 800g (2Y+) cung ấp dinh dưỡng đầy đủ cho sự phát triển toàn diện của trẻ</p>
                        <div>
                            <p><b class="text-bule23">APTAMIL KID</b> mang đến diện mạo mới cho Aptakid (được trình làng qua bao bì mới của Aptakid New Zealand số 3). Sản phẩm này hoàn toàn chứa trọn vẹn dưỡng chất <b>SYNBIOTIC Độc quyền</b>, đặc biệt phù hợp cho trẻ sinh mổ. Được sự tin dùng của 82% bà mẹ sinh mổ, Aptakid tự hào là sự lựa chọn dinh dưỡng khoa học, cung cấp đầy đủ dưỡng chất giúp tăng cường đề kháng và sức khỏe mạnh mẽ cho trẻ sinh mổ.</p>
                            <div class="w-100 text-center my-3">
                                <img src="https://cdn-v2.kidsplaza.vn/media/wysiwyg/product/suabotchobe/Aptamil/sua-aptamil-profutuna-kid-cesarbiotik-so-3-800g-2y-5.jpg" width="45%" height="auto" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-bule204 fw-semibold fs-5">Thành phần sữa Aptamil Profutura KID Cesarbiotik số 3 800g (2Y+)</p>
                        <div>
                            <p>Gồm: Lactose (sữa bò), Sữa tách béo (sữa bò), Kem sữa (sữa bò), Galacto- oligosaccharides (GOS) (sữa bò), Acid decosahexaenoic (DHA) (Dầu cá), Fructo- oligosaccharides chuỗi dài (IcFOS) (rễ rau diếp xoăn), Maltodextrin (ngô), Các khoáng chất (Calci carbonat, Mangan sulfat, Sắt (II) sulfat, Kẽm sulfat, Kali iodid), Các vitamin (Vitamin E (DL-alpha-tocopheryl acetat), Vitamin C (Natri-L-ascorbat), Vitamin B3 (Nicotinamid), Vitamin B2 (Riboflavin), Vitamin A (Retinyl acetat), Vitamin D3 (Cholecalciferol), Acid folic (Acid pteroymonoglutamic), Vitamin B6 (Pyridoxin hydroclorid), Vitamin B1 (Thiamin hydroclorid)), Chất nhũ hóa (lecithin đậu nành, INS 322(i)), Bifidobacterium Breve M-16V, Chất chống oxy hóa (Tocopherol concentrate (dạng hỗn hợp) (INS 307b), Ascorbyl palmitat (INS 304), dl-alpha-Tocopherol (INS 307c)).</p>
                            <p>Thông tin về dị ứng thực phẩm: Có chứa sữa, dầu cá, đậu nành.</p>
                            <div class="w-100 text-center my-3">
                                <img src="https://cdn-v2.kidsplaza.vn/media/wysiwyg/product/suabotchobe/Aptamil/sua-aptamil-profutuna-kid-cesarbiotik-so-3-800g-2y-1.jpg" width="45%" height="auto" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-bule204 fw-semibold fs-5">Lợi ích dinh dưỡng cho trẻ sinh mổ khi sử dụng sữa Profutura KID Cesarbiotik số 3</p>
                        <div>
                            <p>Lấy cảm hứng từ những năm tháng đầu đời diệu kỳ, và trên hết là hành trình lớn khôn theo cách rất riêng của trẻ, chúng tôi luôn thấu hiểu mong muốn con mình luôn khỏe mạnh và sẵn sàng cùng bố mẹ xây dựng đề kháng vững vàng cho con, dù con sinh thường hay sinh mổ</p>
                            <p>Chúng tôi tâm huyết nghiên cứu những dưỡng chất phù hợp với trẻ sinh mổ: SYNBIOTIC độc quyền được chứng minh hiệu quả, giúp tăng cường đề kháng cho trẻ sinh mổ.</p>
                            <div class="w-100 text-center my-3">
                                <img src="https://cdn-v2.kidsplaza.vn/media/wysiwyg/product/suabotchobe/Aptamil/sua-aptamil-profutuna-kid-cesarbiotik-so-3-800g-2y-6.jpg" width="45%" height="auto" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-bule204 fw-semibold fs-5">Ưu điểm nổi bật Profutura KID Cesarbiotik số 3 800g</p>
                        <ul class="">
                            @foreach(
                            [
                            'SYNBIOTIC ĐỘC QUYỀN kết hợp lợi khuẩn <b>Probiotic Bifidobacterium Breve M-16V</b> và chất xơ <b>Prebiotics scGOS/lcFOS</b> tỷ lệ (9:1) hỗ trợ đường ruột khỏe mạnh, tăng cường đề kháng, phù hợp cho trẻ sinh mổ - hiệu quả đã được chứng minh.',
                            'Giàu <b>DHA</b> giúp phát triển trí não của trẻ',
                            'Chứa <b>Canxi, Vitamin D3</b> giúp xương và răng phát triển chắc khỏe, phát triển chiều cao ở trẻ',
                            'Chứa đến <b>16 loại Vitamin và khoáng chất</b> thiết yếu giúp trẻ phát triển khỏe mạnh'
                            ] as $item
                            )
                            <li class="mb-2">{!! html_entity_decode($item) !!}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <p class="text-bule204 fw-semibold fs-5">Ưu điểm nổi bật Profutura KID Cesarbiotik số 3 800g</p>
                        <ul class="">
                            @foreach(
                            [
                            'SYNBIOTIC ĐỘC QUYỀN kết hợp lợi khuẩn <b>Probiotic Bifidobacterium Breve M-16V</b> và chất xơ <b>Prebiotics scGOS/lcFOS</b> tỷ lệ (9:1) hỗ trợ đường ruột khỏe mạnh, tăng cường đề kháng, phù hợp cho trẻ sinh mổ - hiệu quả đã được chứng minh.',
                            'Giàu <b>DHA</b> giúp phát triển trí não của trẻ',
                            'Chứa <b>Canxi, Vitamin D3</b> giúp xương và răng phát triển chắc khỏe, phát triển chiều cao ở trẻ',
                            'Chứa đến <b>16 loại Vitamin và khoáng chất</b> thiết yếu giúp trẻ phát triển khỏe mạnh'
                            ] as $item
                            )
                            <li class="mb-2">{!! html_entity_decode($item) !!}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <p class="text-bule204 fw-semibold fs-5">Cách sử dụng sữa Aptamil Profutura KID Cesarbiotik số 3 800g (2Y+)</p>
                        <ul class="list-inline">
                            @foreach(
                            [
                            '<b>Bước 1:</b> Rửa tay và tiệt trùng tất cả các dụng cụ với nước sạch đun sôi trong 10 phút. Đun sôi nước, để nước nguội đến 40°C. Đong lượng nước cần thiết cho vào cốc.',
                            '<b>Bước 2:</b> Dùng muỗng được cung cấp, gạt bớt bột. Không đè hay ép bột.',
                            '<b>Bước 3:</b> Cho đúng lượng <b class="text-bule23">sữa bột</b> <b>aptamil Profutura</b> vào cốc (theo bảng hướng dẫn pha sản phẩm cho trẻ).',
                            '<b>Bước 4:</b> Khuấy đều hỗn hợp cho đến khi bột tan hết.',
                            '<b>Bước 5:</b> Kiểm tra nhiệt độ sản phẩm sau khi pha. Cho trẻ uống ngay. Chỉ pha sẵn một phần ăn cho một lần dùng. Bỏ phần sản phẩm còn thừa.'
                            ] as $item
                            )
                            <li class="mb-2">{!! html_entity_decode($item) !!}</li>
                            @endforeach
                        </ul>
                        <div class="w-100 text-center my-3">
                            <img src="https://cdn-v2.kidsplaza.vn/media/wysiwyg/product/suabotchobe/Aptamil/sua-aptamil-profutuna-kid-cesarbiotik-so-3-800g-2y-7.jpg" width="45%" height="auto" />
                        </div>
                    </div>
                    <div>
                        <p class="text-bule204 fw-semibold fs-5">Hàm lượng sử dụng sữa Profutura KID Cesarbiotik số 3</p>
                        <div>
                            <p>Aptamil Profutura KID CESARBIOTIK 3 Growing Up Milk là thực phẩm bổ sung dành cho trẻ từ 2 tuổi trở lên, được nhập khẩu chính hãng từ New Zealand, giúp trẻ tăng cường đề kháng và phát triển toàn diện, phù hợp cho trẻ sinh mổ.</p>
                            <p class="fw-semibold">Lượng dùng khuyến nghị </p>
                            <p>Pha 4 muỗng (36,8 g) Aptamil Profutura KID CESARBIOTIK 3 với 200 ml nước. Các tỷ lệ này chỉ được thay đổi khi có chỉ định của chuyên viên y tế. Pha sản phẩm không đúng cách có thể ảnh hưởng sức khỏe của trẻ. Chỉ pha sẵn một phần ăn cho một lần dùng. Sử dụng muỗng đo lường được cung cấp.</p>
                            <div class="w-100 text-center my-3">
                                <img src="https://cdn-v2.kidsplaza.vn/media/wysiwyg/product/suabotchobe/Aptamil/sua-aptamil-profutuna-kid-cesarbiotik-so-3-800g-2y-8.jpg" width="45%" height="auto" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-bule204 fw-semibold fs-5">Bảo quản sữa Aptamil Profutura KID Cesarbiotik số 3 800g (2Y+)</p>
                        <div>
                            @foreach(
                            ['Sử dụng trước thời hạn in trên đáy hộp.',
                            'Bảo quản sản phẩm ở nơi khô ráo, thoáng mát trước và sau khi mở hộp để đảm bảo chất lượng sản phẩm.',
                            'Sau khi mở hộp, hạn chế để sản phẩm tiếp xúc không khí và sử dụng hết trong vòng 4 tuần.'] as $item
                            )
                            <p>- {{$item}}</p>
                            @endforeach
                            <p class="fw-semibold">Cảnh báo:</p>
                            <ul class="">
                                @foreach(
                                [
                                'Không sử dụng lại phần ăn thừa.',
                                'Không hâm nóng sữa đã pha trong lò vi sóng (nguy cơ quá nhiệt).',
                                'Tuân thủ nghiêm ngặt các khuyến nghị về lượng hỗn hợp khi chuẩn bị và không thêm bất cứ thứ gì vào hỗn hợp đã chuẩn bị.'
                                ] as $item
                                )
                                <li class="mb-2">{!! html_entity_decode($item) !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div>
                        <p class="text-bule204 fw-semibold fs-5">Thông tin sản phẩm</p>
                        <div>
                            <ul class="list-inline">
                                @foreach(
                                [
                                '<b>Xuất xứ:</b> New Zealand',
                                '<b>Thương hiệu:</b> Aptamil',
                                '<b>Độ tuổi sử dụng:</b> 2 tuổi trở lên',
                                '<b>HSD:</b> 24 tháng',
                                '<b>Trọng lượng:</b> 800g',
                                '<b>Độ tuổi phù hợp:</b> 2 tuổi trở lên',
                                ] as $item
                                )
                                <li class="mb-3">{!! html_entity_decode($item) !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-product-more position-relative d-flex fw-semibold gap-2 justify-content-center align-items-center text-bule204 mt-4 mb-1 cup">
                    <div class="fs-5 modal-product-more-text ">Xem thêm</div>
                    <i class="bi bi-chevron-right"></i>
                    <div class="modal-product-more-bg position-absolute"></div>
                </div>
            </div>
        </div>
    </div>
</div>