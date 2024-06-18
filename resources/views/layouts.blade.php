<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kids Plaza - Hệ thống Mẹ Bầu & Em Bé đáng tin cậy nhất Việt Nam')</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    @yield('style-layout')
    <link href="{{ asset('css/components/navbar.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
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
        @endif 
        <main class="bg-cF pt-4 ">
            @yield('content')
        </main>
        @include('components/footer')
    </div>
    <x-modal />
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/form-info.js') }}"></script>
<script src="{{ asset('js/home/header.js') }}"></script>
<script src="{{ asset('js/home/outstan-category.js') }}"></script>

</html>