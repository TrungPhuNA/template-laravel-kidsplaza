<link href="{{ asset('css/components/title-frame-web.css') }}" rel="stylesheet">
<div class="d-flex flex-wrap align-items-center flex-lg-wrap gap-xl-0 gap-2 title-frame-web">
<<<<<<< HEAD
    @if (is_array($title) && count($title) > 1)
        <div class="d-flex gap-4 me-4 title-frame-web-content">
            @foreach ($title as $index => $title)
                <h4
                    class="{{ $textColor ?? '' }} {{ $index == 0 ? 'title-frame-web-first' : '' }} fw-semibold mb-0 fs-xs-7">
                    {{ $title }}</h4>
            @endforeach
        </div>
    @elseif(is_string($title))
        <h4 class="{{ $textColor ?? '' }} fw-semibold mb-0 me-4 fs-xs-7">{{ $title }}</h4>
    @endif
    @if (!empty($nav))
        <div class="d-flex align-items-center gap-2 frame-product-layout-display-title d-xs-none title-frame-web-nav">
            @foreach ($nav as $index => $item)
                <div
                    class="cup text-oragne-hover {{ $index === 0 ? 'pe-3' : 'px-3' }} {{ $index !== count($nav) - 1 ? 'border-end' : '' }} border-dark title-nav">
                    {{ $item }}</div>
            @endforeach
        </div>
    @endif

</div>
=======
    @if(is_array($title) && count($title) > 1)
    <div class="d-flex gap-4 me-4 title-frame-web-content">
        @foreach($title as $index => $title)
        <h4 class="{{ $textColor }} {{  $index == 0  ? 'title-frame-web-first' : '' }} fw-semibold mb-0 fs-xs-7">{{ $title }}</h4>
        @endforeach
    </div>
    @elseif(is_string($title))
        <h4 class="{{ $textColor }} fw-semibold mb-0 me-4 fs-xs-7">{{ $title }}</h4>
    @endif
    @if(!empty($nav))
    <div class="d-flex align-items-center gap-2 frame-product-layout-display-title d-xs-none title-frame-web-nav">
        @foreach($nav as $index => $item)
        <div class="cup text-oragne-hover {{ $index === 0 ? 'pe-3' : 'px-3'  }} {{$index !== count($nav) - 1 ? 'border-end' : '' }} border-dark title-nav">{{$item}}</div>
        @endforeach
    </div>
    @endif

</div>
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
