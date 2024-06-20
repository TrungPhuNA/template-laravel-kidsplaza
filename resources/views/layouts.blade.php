<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kids Plaza - Hệ thống Mẹ Bầu & Em Bé đáng tin cậy nhất Việt Nam')</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    @yield('style-layout')
    @stack('link-style-list-product')
    @stack('link-style-home-header')
    @stack('link-style-home-outstan-brand')
    @stack('link-style-home-outstan-category')
    @stack('link-style-home-service-banner')
    @stack('link-style-home-useful-information')
    @stack('link-style-category-category')
    @stack('link-style-pages-product-detail-product-des')
    <link href="{{ asset('css/components/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components/footer.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>
    <div class="overflow-x-hidden position-relative">
        @include('components/navbar', ['page' => Route::currentRouteName()])
        <main class="bg-cF pt-4 ">
            @yield('content')
        </main>
        @include('components/footer')
    </div>
    <x-modal />
    <x-form-info idModal="registerModal" />
    <x-form-info idModal="loginModal" />
</body>

@stack('link-script-page-category')
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/carousel.js') }}"></script>
<script src="{{ asset('js/modal.js') }}"></script>
<script src="{{ asset('js/form-info.js') }}"></script>
<script src="{{ asset('js/home/header.js') }}"></script>
<script src="{{ asset('js/home/outstan-category.js') }}"></script>
<script src="{{ asset('js/navbar-top-content.js') }}"></script>

</html>
