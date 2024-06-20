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

<<<<<<< HEAD
    $('.dropdown-toggle').each(function () {
        var dropdownToggle = $(this);
        var dropdownMenu = dropdownToggle.next('.dropdown-menu');

        dropdownToggle.on('click', function () {
            dropdownMenu.toggle();
            $('.dropdown-menu').not(dropdownMenu).hide(); // Ẩn tất cả các dropdown-menu khác
        });

        dropdownMenu.find('li').on('click', function () {
            var listItem = $(this);
            listItem.toggleClass('border-secondary');
            listItem.find('input[type="checkbox"]').prop('checked', function (i, val) {
                return !val;
            });
        });

        dropdownMenu.find('.dropdown-not-choose').on('click', function () {
            var parentMenu = $(this).closest('.dropdown-menu');
            parentMenu.find('li').removeClass('border-secondary');
            parentMenu.find('input[type="checkbox"]').prop('checked', false);
        });

        dropdownMenu.find('.dropdown-result').on('click', function () {
            var searchParams = [];
            var objectParams = {};

            dropdownMenu.each(function () {
                var key = $(this).attr('id');
                $(this).find('input[type="checkbox"]:checked').each(function () {
                    var inputcheckbox = $(this);
                    objectParams[key] = objectParams[key] ? objectParams[key] + ' ' + inputcheckbox.val() : inputcheckbox.val();
                });
                searchParams.push({ key: key, value: objectParams[key] });
            });

            var params = new URLSearchParams();
            searchParams.forEach(function (param) {
                if (param.value) params.set(param.key, param.value);
            });

            var url = new URL(window.location.href);
            url.search = params.toString();
            // window.location.href = url;
            // Thay đổi URL mà không tải lại trang
            history.pushState({}, '', url);

        });
    });


    // modal cart
    $('.navbar-cart').on('click', function () {
        $('.cart-modal').toggle();
    });
    


=======
    $('.dropdown-toggle').map(function () {
        $(this).on('click', function () {
            console.log('--- DATA ---', $(this).next('.dropdown-menu'));
            $(this).next('.dropdown-menu').toggle();
        });
    })
>>>>>>> 9eb8b8205b9848d613fe2d15ffe370f700a51dc0
});
