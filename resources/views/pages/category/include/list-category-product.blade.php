<section class="section-wrapper">
    <div class="d-md-none-x">
        <div class="d-flex flex-wrap gap-3 box-m-top-bottom">
            @foreach(
                $data_static['propertie_categroy']
                as $key => $item
            )
                <x-dropdown :name=" $item['propertie_name'] "  :data=" $item['propertie_detal'] "/>
            @endforeach
            
        </div>
    </div>
<<<<<<< HEAD
    <div class="box-m-top-bottom bg-white rounded-4 box-p list-category-product"> 
        <div class="d-md-none-x">
            <div class="d-flex justify-content-between align-items-center">
                <x-title-frame-web title="Mẹ bầu và sau sinh" :nav="['']" />
=======
    <div class="box-m-top-bottom box-p bg-white rounded-4">
        <div class="d-md-none-x">
            <div class="d-flex justify-content-between align-items-center">
                <x-title-frame-web :title="'Mẹ bầu và sau sinh'" :nav="['']" />
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
                <div class="fw-semibold text-bule204 d-flex align-items-center gap-2">
                    <i class="bi bi-filter"></i>
                    <div class="fs-6">Sắp xếp theo</div>
                </div>
            </div>
        </div>
        <div class="row box-m-top-bottom justify-content-center">
<<<<<<< HEAD
            @foreach($products as $key => $product)
            <div class="col-xl-3 col-lg-3 col-sm-6 col-xs-6 list-product-item px-0">
                <div class="p-3 p-xs-2">
                    @include('components/product-display',[
                        'product' => $product,
                    ])
=======
            @foreach([1,2,3,4,5,6,7,8,9,10,11,12] as $key => $product)
            <div class="col-xl-3 col-lg-3 col-sm-6 col-xs-6 list-product-item px-0">
                <div class="p-2">
                    @include('components/product-display')
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
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
</section>