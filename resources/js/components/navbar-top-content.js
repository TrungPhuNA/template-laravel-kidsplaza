var navbarTopContent = document.getElementsByClassName('navbar-top-content');
// Lấy ra chiều rộng của màn hình
var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
if (width < 768) {
    window.onscroll = function () {
        // Khi người dùng cuộn xuống 20px từ đỉnh trang, hiển thị nút
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            navbarTopContent[0].classList.add('position-fixed', 'w-100', 'bg-bule204', 'z-99');
        } else {
            navbarTopContent[0].classList.remove('position-fixed', 'w-100', 'bg-bule204');
        }
    };
}

