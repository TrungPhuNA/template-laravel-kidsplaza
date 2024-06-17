require('./bootstrap');
$('.header-center-owl-carousel').owlCarousel({
    loop: true,
    items: 1,
    margin: 10,
    nav: true,
    dots: false,
    navText: [`
        <div class="bg-white border rounded-5 py-1 px-2">
            <i class="bi bi-chevron-left"></i>
        </div>
        `,
        `
        <div class="bg-white border rounded-5 py-1 px-2">
            <i class="bi bi-chevron-right"></i>
        </div>    
            `
    ],
});

$('.service-banner-owl-carousel').owlCarousel({
    loop: true,
    items: 3,
    center: true,
    margin: 15,
    nav: true,
    dots: false,
    navText: [`
        <div class="bg-white border rounded-5 py-1 px-2">
            <i class="bi bi-chevron-left"></i>
        </div>
        `,
        `
        <div class="bg-white border rounded-5 py-1 px-2">
            <i class="bi bi-chevron-right"></i>
        </div>    
            `
    ],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 3,
        }
    }
});

$('.outstan-brand-owl-carousel').owlCarousel({
    loop: false,
    items: 2,
    dots: false,
    autoWidth: true,
    margin: 35,
    nav: false,
    dots: false,
});

$('.banner-home-owl-carousel').owlCarousel({
    loop: true,
    items: 1,
    margin: 10,
    nav: true,
    dots: false,
    navText: [`
        <div class="bg-white border rounded-5 py-1 px-2">
            <i class="bi bi-chevron-left"></i>
        </div>
        `,
        `
        <div class="bg-white border rounded-5 py-1 px-2">
            <i class="bi bi-chevron-right"></i>
        </div>    
            `
    ],
});

$('.frame-product-layout-owl-carousel').owlCarousel({
    loop: true,
    items: 7,
    margin: 45,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 4,
        },
        600: {
            items: 5,
        },
        1000: {
            items: 7,
        }
    }
});

$('.useful-information-owl-carousel').owlCarousel({
    loop: true,
    items: 4,
    margin: 20,
    nav: true,
    dots: false,
    navText: [`
        <div class="bg-white border rounded-5 py-1 px-2">
            <i class="bi bi-chevron-left"></i>
        </div>
        `,
        `
        <div class="bg-white border rounded-5 py-1 px-2">
            <i class="bi bi-chevron-right"></i>
        </div>    
            `
    ],
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 4,
        }
    }
});

$('.viewed-the-product-owl-carousel').owlCarousel({
    loop: true,
    // items: 6,
    margin: 15,
    nav: true,
    dots: false,
    navText: [`
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
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 5,
        }
    }
});

$('.category-list-product-owl-carousel').owlCarousel({
    loop: true,
    items: 4,
    margin: 15,
    nav: true,
    dots: false,
    navText: [`
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
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 5,
        }
    }
});

$('.navbar-top-banner-owl-carousel').owlCarousel({
    loop: true,
    items: 1,
    margin: 10,
    nav: false,
    dots: false,
});

$('.outstan-brand-sm-owl-carousel').owlCarousel({
    loop: true,
    items: 5,
    margin: 25,
    nav: false,
    dots: false,
});

$('.outstan-banner-sm-owl-carousel').owlCarousel({
    loop: true,
    items: 2,
    margin: 25,
    // autoWidth: true,
    nav: false,
    dots: false,
});

$('.frame-product-layout-display-banner-owl-carousel').owlCarousel({
    loop: true,
    items: 1,
    margin: 15,
    // autoWidth: true,
    nav: false,
    dots: false,
});


/* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

var navbarWrapContent = $('.navbar-wrap');
var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
window.onscroll = function () {
    if (width > 765) {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            $('.navbar-bottom').show();
            navbarWrapContent[0].classList.add('position-fixed');

        } else {
            $('.navbar-bottom').hide();
            navbarWrapContent[0].classList.remove('position-fixed');
        }
    } else {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            $('.navbar-top-content').addClass('position-fixed bg-bule204');
        } else {
            $('.navbar-top-content').removeClass('position-fixed bg-bule204');
        }
    }
    if (width < 770){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            $('.header-product').addClass('position-fixed');
        } else {
            $('.header-product').removeClass('position-fixed');
        }
    }
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        $('.header-category').addClass('position-fixed');
    } else {
        $('.header-category').removeClass('position-fixed');
    }

};

$('#productDisplay').find('.modal-header').hide();
// $('#productDisplay').find('.modal-header').show();
$('#productDisplay').find('.modal-body').on('scroll', function () {
    if ($(this).scrollTop() > 20) {
        $('#productDisplay').find('.modal-header').show();
    } else {
        $('#productDisplay').find('.modal-header').hide();
    }
});

// Modal
$('#productDisplay').find('.modal-product-more').on('click', function () {
    var text = $(this).find('.modal-product-more-text');
    $(this).find('.modal-product-more-bg').toggle();
    if (text.text() == 'Xem thêm') {
        $('#productDisplay').find('.modal-product-des').css('height', '100%');
        text.text('Rút gọn');
    } else {
        $('#productDisplay').find('.modal-product-des').css('height', '550px');
        text.text('Xem thêm');
    }
});

// Product
$('.product-des-content-wrap').find('.product-des-see-more').on('click', function () {
    var text = $(this).find('span');
    
    $(this).find('.product-des-bg').toggle();
    if (text.text() == 'Xem thêm') {
        $('.product-des-content-wrap').find('.product-des-content').css('height', '100%');
        text.text('Rút gọn');
    } else {
        $('.product-des-content-wrap').find('.product-des-content').css('height', '550px');
        text.text('Xem thêm');
    }
});



/* Modal */
var options = {
    backdrop: true, // Dung để click ra ngoài để tắt modal
    keyboard: true // Dùng để ấn phím esc để tắt modal
};

var register = new bootstrap.Modal(document.getElementById('registerModal'), options);
var login = new bootstrap.Modal(document.getElementById('loginModal'), options);
var productDisplay = new bootstrap.Modal(document.getElementById('productDisplay'), options);



$('.product-display').on('click', function () {
    productDisplay.show();
});


$('.registerModal').on('click', function () {
    register.show();
    login.hide();
});
$('#registerModal').on('show.bs.modal', function () {
    $(this).find('form').trigger('reset');
    $(this).find('.box-input').each(function () {
        $(this).find('div').text('');
    })
});
$('.loginModal').on('click', function () {
    login.show();
    register.hide();
});
$('#loginModal').on('show.bs.modal', function () {
    $(this).find('form').trigger('reset');
    $(this).find('.box-input').each(function () {
        $(this).find('div').text('');
    })
});

$(document).ready(function () {
    $('.form-info').find('input').on('focus', function () {
        $(this).next().text('');
    });
    $('#registerForm').on('submit', function (e) {
        e.preventDefault();
        console.log('--- $(this) ---', $(this));

        var data = $(this).serializeArray();
        var dataObject = {};
        data.forEach(function (item) {
            dataObject[item.name] = item.value;
        });
        $.ajax({
            url: 'http://localhost:8000/api/register',
            method: 'POST',
            data: JSON.stringify(dataObject),
            contentType: 'application/json',
            success: function (response) {
                alert('Đăng ký thành công');
                register.hide();
                login.show();
                return response;


            },
            error: function (error) {
                $.map(error.responseJSON.message, function (value, index) {
                    $(`.${index}Error`).text(value[0]);

                })

            }
        });
    });

    $('#loginForm').on('submit', function (e) {
        e.preventDefault();

        var data = $(this).serializeArray();
        var dataObject = {};
        data.forEach(function (item) {
            dataObject[item.name] = item.value;
        });
        $.ajax({
            url: 'http://localhost:8000/api/login',
            method: 'POST',
            data: JSON.stringify(dataObject),
            contentType: 'application/json',
            success: function (response) {
                alert('Đăng nhập thành công');
                login.hide();
                // Lưu dữ liệu vào local storage
                localStorage.setItem('user', JSON.stringify(response.data ?? {}));
                // Thực hiện load lại trang
                location.reload();
                console.log("LD__", response.data ?? {});
                // return response;

            },
            error: function (error) {
                if (typeof error.responseJSON.message === 'string') {
                    alert(error.responseJSON.message);
                } else {
                    $.map(error.responseJSON.message, function (value, index) {
                        $(`.${index}Error`).text(value[0]);

                    })
                }

            }
        });
    });
});
