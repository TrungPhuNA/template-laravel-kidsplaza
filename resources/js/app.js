require('./bootstrap');
const { windowSize } = require('./variable.js');
const { toggleContent } = require('./functions/toggleContent.js');

$(document).ready(function () {
    // Hàm để kiểm tra vị trí scroll và thêm/lớp lớp CSS
    function handleScroll() {
        var scrollTop = document.body.scrollTop > 20 || document.documentElement.scrollTop > 20;

        if (windowSize > 765) {
            $('.navbar-bottom').toggle(scrollTop);
            $('.navbar-wrap').toggleClass('position-fixed', scrollTop);
        } else {
            $('.navbar-top-content').toggleClass('position-fixed bg-bule204', scrollTop);
        }

        if (windowSize < 770) {
            $('.header-product').toggleClass('position-fixed', scrollTop);
        }

        $('.header-category').toggleClass('position-fixed', scrollTop);
    }
    window.onscroll = handleScroll;

    // Xử lý hiển thị modal header khi scroll modal body
    $('#productDisplay .modal-body').on('scroll', function () {
        $('#productDisplay .modal-header').toggle($(this).scrollTop() > 20);
    });

    // Hàm toggle chiều cao và text của các phần tử
    toggleContent('.product-des-see-more', '.product-des-content-wrap .product-des-content', '550px');
    toggleContent('.modal-product-more', '#productDisplay .modal-product-des', '550px');

    $('.dropdown-toggle').map(function () {
        $(this).on('click', function () {
            console.log('--- DATA ---', $(this).next('.dropdown-menu'));
            $(this).next('.dropdown-menu').toggle();
        });
    })
});
