const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

mix.sass('resources/sass/main.scss', 'public/css');

mix.sass('resources/sass/components/navbar.scss', 'public/css/components');
mix.sass('resources/sass/components/product-promotional.scss', 'public/css/components');
mix.sass('resources/sass/components/product-display.scss', 'public/css/components');
mix.sass('resources/sass/components/frame-product-layout-display.scss', 'public/css/components');
mix.sass('resources/sass/components/footer.scss', 'public/css/components');
mix.sass('resources/sass/components/products-just-for-you.scss', 'public/css/components');
mix.sass('resources/sass/components/viewed-the-product.scss', 'public/css/components');
mix.sass('resources/sass/components/title-frame-web.scss', 'public/css/components');
mix.sass('resources/sass/components/modal.scss', 'public/css/components');



mix.sass('resources/sass/pages/home/home.scss', 'public/css/pages/home');
mix.sass('resources/sass/pages/home/header.scss', 'public/css/pages/home');
mix.sass('resources/sass/pages/home/list-product.scss', 'public/css/pages/home');
mix.sass('resources/sass/pages/home/useful-information.scss', 'public/css/pages/home');
mix.sass('resources/sass/pages/home/outstan-category.scss', 'public/css/pages/home');
mix.sass('resources/sass/pages/home/outstan-brand.scss', 'public/css/pages/home');
mix.sass('resources/sass/pages/home/service-banner.scss', 'public/css/pages/home');

mix.sass('resources/sass/pages/category/category.scss', 'public/css/pages/category');

mix.sass('resources/sass/pages/product_detail/product-detail.scss', 'public/css/pages/product-detail');
mix.sass('resources/sass/pages/product_detail/product-des.scss', 'public/css/pages/product-detail');

mix.sass('resources/sass/pages/customer/orders.scss', 'public/css/pages/customer/orders');


mix.sass('resources/sass/abstracts/_variableweb.scss', 'public/css/abstracts');

// Biên dịch tệp app.js cho tôi
mix.js('resources/js/app.js', 'public/js');
mix.js('resources/js/home/header.js', 'public/js/home');
mix.js('resources/js/home/outstan-category.js', 'public/js/home');
mix.js('resources/js/components/navbar-top-content.js', 'public/js/components');
mix.js('resources/js/components/form-info.js', 'public/js/components');
mix.js('resources/js/components/product-display.js', 'public/js/components');


