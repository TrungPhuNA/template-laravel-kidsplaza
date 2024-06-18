// Hàm khởi tạo carousel
const { initializeOwlCarousel } = require('./functions/initializeOwlCarousel.js');

// Cấu hình navText chung
const navText = [
    `
    <div class="bg-white border rounded-5 py-1 px-2">
        <i class="bi bi-chevron-left"></i>
    </div>
    `,
    `
    <div class="bg-white border rounded-5 py-1 px-2">
        <i class="bi bi-chevron-right"></i>
    </div>    
    `
];

// Khởi tạo các carousels với các cấu hình khác nhau
initializeOwlCarousel('.header-center-owl-carousel', {
    loop: true,
    items: 1,
    margin: 10,
    nav: true,
    dots: false,
    navText: navText
});

initializeOwlCarousel('.service-banner-owl-carousel', {
    loop: true,
    items: 3,
    center: true,
    margin: 15,
    nav: true,
    dots: false,
    navText: navText,
    responsive: {
        0: { items: 1 },
        600: { items: 2 },
        1000: { items: 3 }
    }
});

initializeOwlCarousel('.outstan-brand-owl-carousel', {
    loop: false,
    items: 2,
    dots: false,
    autoWidth: true,
    margin: 35,
    nav: false
});

initializeOwlCarousel('.banner-home-owl-carousel', {
    loop: true,
    items: 1,
    margin: 10,
    nav: true,
    dots: false,
    navText: navText
});

initializeOwlCarousel('.frame-product-layout-owl-carousel', {
    loop: true,
    items: 7,
    margin: 45,
    nav: false,
    dots: false,
    responsive: {
        0: { items: 4 },
        600: { items: 5 },
        1000: { items: 7 }
    }
});

initializeOwlCarousel('.useful-information-owl-carousel', {
    loop: true,
    items: 4,
    margin: 20,
    nav: true,
    dots: false,
    navText: navText,
    responsive: {
        0: { items: 2 },
        600: { items: 3 },
        1000: { items: 4 }
    }
});

initializeOwlCarousel('.viewed-the-product-owl-carousel', {
    loop: true,
    margin: 15,
    nav: true,
    dots: false,
    navText: [
        `
        <div class="bg-white border rounded-5 py-1 px-2">
            <i class="bi bi-chevron-left fs-5"></i>
        </div>
        `,
        `
        <div class="bg-white border rounded-5 py-1 px-2">
            <i class="bi bi-chevron-right fs-5"></i>
        </div>    
        `
    ],
    responsive: {
        0: { items: 1 },
        600: { items: 3 },
        1000: { items: 5 }
    }
});

initializeOwlCarousel('.category-list-product-owl-carousel', {
    loop: true,
    items: 4,
    margin: 15,
    nav: true,
    dots: false,
    navText: [
        `
        <div class="bg-white border rounded-5 py-1 px-2">
            <i class="bi bi-chevron-left fs-5"></i>
        </div>
        `,
        `
        <div class="bg-white border rounded-5 py-1 px-2">
            <i class="bi bi-chevron-right fs-5"></i>
        </div>    
        `
    ],
    responsive: {
        0: { items: 1 },
        600: { items: 3 },
        1000: { items: 5 }
    }
});

initializeOwlCarousel('.navbar-top-banner-owl-carousel', {
    loop: true,
    items: 1,
    margin: 10,
    nav: false,
    dots: false
});

initializeOwlCarousel('.outstan-brand-sm-owl-carousel', {
    loop: true,
    items: 5,
    margin: 25,
    nav: false,
    dots: false
});

initializeOwlCarousel('.outstan-banner-sm-owl-carousel', {
    loop: true,
    items: 2,
    margin: 25,
    nav: false,
    dots: false
});

initializeOwlCarousel('.frame-product-layout-display-banner-owl-carousel', {
    loop: true,
    items: 1,
    margin: 15,
    nav: false,
    dots: false
});
