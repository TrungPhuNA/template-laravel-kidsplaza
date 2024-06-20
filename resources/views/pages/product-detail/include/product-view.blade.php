<<<<<<< HEAD
<link href="{{ asset('css/pages/product-detail/product-detail.css') }}" rel="stylesheet">

=======
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
<section class="section-wrapper">
  <div class="bg-white rounded-3 box-p rounded-4">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-12">
<<<<<<< HEAD
        <div>
          <div class="product-detail-owl-carousel owl-carousel owl-theme">
            @foreach(
            [
              'https://cdn-v2.kidsplaza.vn/media/catalog/product/b/o/bot-ngu-coc-me-bau-babba-s-mommy-270g-1.jpg',
              'https://cdn-v2.kidsplaza.vn/media/catalog/product/b/o/bot-ngu-coc-me-bau-babba-s-mommy-270g-2.jpg',
              'https://cdn-v2.kidsplaza.vn/media/catalog/product/b/o/bot-ngu-coc-me-bau-babba-s-mommy-270g-3.jpg',
              'https://cdn-v2.kidsplaza.vn/media/catalog/product/b/o/bot-ngu-coc-me-bau-babba-s-mommy-270g-4.jpg',
            ] as $key => $image
            )
            <div class="item">
=======
        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            @foreach(
            [
            'https://cdn-v2.kidsplaza.vn/media/catalog/product/b/o/bot-ngu-coc-me-bau-babba-s-mommy-270g-2.jpg',
            'https://cdn-v2.kidsplaza.vn/media/catalog/product/b/o/bot-ngu-coc-me-bau-babba-s-mommy-270g-2.jpg',
            'https://cdn-v2.kidsplaza.vn/media/catalog/product/b/o/bot-ngu-coc-me-bau-babba-s-mommy-270g-2.jpg',
            'https://cdn-v2.kidsplaza.vn/media/catalog/product/b/o/bot-ngu-coc-me-bau-babba-s-mommy-270g-2.jpg'
            ] as $key => $image
            )
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
              <img src="{{ $image }}" class="d-block w-100 product-image-main" alt="Main Product Image">
            </div>
            @endforeach
          </div>
<<<<<<< HEAD
=======
          <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
        </div>
        <div class="d-sm-none d-xs-none d-lg-block">
          <div class="row gap-3 thumbnail-images">
            @foreach(
            ['https://cdn-v2.kidsplaza.vn/media/catalog/product/b/o/bot-ngu-coc-me-bau-babba-s-mommy-270g-1.jpg','https://cdn-v2.kidsplaza.vn/media/catalog/product/b/o/bot-ngu-coc-me-bau-babba-s-mommy-270g-2.jpg','https://cdn-v2.kidsplaza.vn/media/catalog/product/b/o/bot-ngu-coc-me-bau-babba-s-mommy-270g-3.jpg','https://cdn-v2.kidsplaza.vn/media/catalog/product/b/o/bot-ngu-coc-me-bau-babba-s-mommy-270g-4.jpg']
            as $key => $image
            )
            <div class="col-2 border rounded-2 py-1">
              <img src="{{ $image }}" class="img-fluid" data-bs-target="#productCarousel" data-bs-slide-to="0" alt="Thumbnail {{ $key + 1 }}">
            </div>
            @endforeach
          </div>
          <div class="row mt-3">
            <div class="col-8 d-flex align-items-center gap-2">
              <div>
                Chia sẻ:
              </div>
              <div>
                <a href="#"><img width="24" height="24" src="https://cdn.kidsplaza.io/assets/icons/messenger-icon.png" alt="Messenger"></a>
              </div>
              <div>
                <a href="#"><img width="24" height="24" src="https://cdn.kidsplaza.io/assets/icons/facebook-icon.png" alt="Facebook"></a>
              </div>
              <div>
                <a href="#"><img width="24" height="24" src="https://cdn.kidsplaza.io/assets/icons/twitter-icon.png" alt="Twitter"></a>
              </div>
            </div>
            <div class="col d-flex align-items-center gap-2 text-bule204">
              <i class="bi bi-heart fs-5 fw-bold"></i>
              <div style="font-size:14px;">Yêu thích (1)</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 d-sm-none d-xs-none d-lg-block">
        <h4 class="text-bule204 fw-semibold">Bột ngũ cốc mẹ bầu Babba's Mommy 270g</h4>
        <p class="mb-1 text-bule204" style="font-size:14px;"><b class="text-black">SKU:</b> 112120030</p>
        <p class="mb-0 text-secondary" style="font-size:14px;">Chưa có đánh giá</p>
        <h3 class="border-top border-bottom py-2 mt-2 mb-4" style="color:#FF7032;">155.000đ</h3>
        <div class="d-grid gap-2 d-md-block">
          <button class="btn text-white" type="button" style="background-color:#FF7032;">MUA NGAY</button>
          <button class="btn btn-outline-primary" type="button">THÊM VÀO GIỎ HÀNG</button>
        </div>
      </div>
    </div>
  </div>
  <div class="d-lg-none">
    <div class="fw-semibold fs-1" style="color:#FF7132;">155.000đ</div>
    <div class="bg-white rounded-4 box-p text-black">
      <div class="fs-4 fw-semibold">Bột ngũ cốc mẹ bầu Babba's Mommy 270g </div>
      <div class="d-flex justify-content-between align-items-end">
        <div class="my-1">
          <div><b>SKU</b> 112120030</div>
          <div>Chưa có đánh giá</div>
        </div>
        <div class="d-flex align-items-center gap-2">
          <i class="bi bi-heart fs-4"></i>
          <div>Yêu thích (1)</div>
          <i class="bi bi-share fs-4"></i>
          <i class="bi bi-chat-dots fs-4"></i>
        </div>
      </div>
      <div class="row flex-wrap border-top mt-1 pt-3 gap-2">
        <div class="col-5 d-flex gap-2">
          <div>
            <img src="https://static.kidsplaza.vn/assets/icons/icon-kicoin-mobile.png" alt="" width="28" height="auto" />
          </div>
          <div>Tích lũy 8% KiCoin</div>
        </div>
        <div class="col-5 d-flex gap-2">
          <div>
            <img src="https://static.kidsplaza.vn/assets/icons/icon-return-mobile.png" alt="" width="28" height="auto" />
          </div>
          <div>Đổi trả trong 15 ngày</div>
        </div>
        <div class="col-5 d-flex gap-2">
          <div>
            <img src="https://static.kidsplaza.vn/assets/icons/icon-free-shipping-mobile.png" alt="" width="28" height="auto" />
          </div>
          <div>Freeship phạm vi 7km</div>
        </div>
        <div class="col-5 d-flex gap-2">
          <div>
            <img src="https://static.kidsplaza.vn/assets/icons/icon-commit-mobile.png" alt="" width="28" height="auto" />
          </div>
          <div>Cam kết chính hãng</div>
        </div>
      </div>
    </div>
  </div>
</section>