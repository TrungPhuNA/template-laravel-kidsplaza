<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kids Plaza - Hệ thống Mẹ Bầu & Em Bé đáng tin cậy nhất Việt Nam')</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JavaScript library -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- OwlCarousel JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    @yield('style')
</head>

<body>
    <div class="overflow-x-hidden position-relative">
        @if(Route::currentRouteNamed('home'))
            @include('components/navbar',['page'=>'home'])
        @endif
        @if(Route::currentRouteNamed('category'))
            @include('components/navbar',['page'=>'category'])
        @endif
        @if(Route::currentRouteNamed('product-detail'))
            @include('components/navbar',['page'=>'product-detail'])
        @endif
        @if(Route::currentRouteNamed('cart'))
            @include('components/navbar',['page'=>'cart'])
        @else
            @include('components/navbar',['page'=>''])
        @endif
        <main class="bg-cF pt-4 ">
            @yield('content')
        </main>
        @include('components/footer')
        <!-- <div class="alter-web position-absolute top-0 end-0 p-5" style="z-index:99;">
            <x-alert bg="alert-success" text="Đăng ký thành công"></x-alert>
        </div> -->
    </div>
    <x-modal />
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/form-info.js') }}"></script>
<script src="{{ asset('js/home/header.js') }}"></script>
<script src="{{ asset('js/home/outstan-category.js') }}"></script>

</html>