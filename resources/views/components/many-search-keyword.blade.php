<section class="section-wrapper">
    <div class="container">
<<<<<<< HEAD
        <x-title-frame-web title="Từ khóa được tìm kiếm nhiều" :nav="['']" />
=======
        <x-title-frame-web :title="'Từ khóa được tìm kiếm nhiều'" :nav="['']" />
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
        <div class="box-m-top-bottom py-4 d-flex flex-wrap gap-3 border-top ">
            @foreach(['Đồ Sơ Sinh', 'Sữa Bột', 'Sữa Công Thức', 'Tã Trẻ Em', 'Bỉm Trẻ Em', 'Máy Hút Sữa', 'Xe Đẩy', 'Ghế Rung', 'Ghế Ăn Dặm', 'Sữa Bầu', 'Sữa Nước', 'Nhiệt Kế', 'Quần Áo Trẻ Em', 'Đồ Chơi', 'Địu Em Bé', 'Giường Cũi', 'Bình Sữa', 'Núm Ty', 'Chậu Tắm', 'Giặt Xả', 'Máy Hâm Sữa', 'Thực Phẩm Nhập Khẩu'] as $item)
                <div class="w-fit-content bg-white rounded-4 shadow-sm px-0 text-center">
                    <div class="py-2 px-3 text-bule204" style="font-size:14px;">{{ $item }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
