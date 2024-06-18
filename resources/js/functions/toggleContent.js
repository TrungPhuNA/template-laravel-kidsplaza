// Hàm toggle chiều cao và text của các phần tử
const toggleContent = (selector, contentSelector, defaultHeight) => {
    $(selector).on('click', function () {
        var text = $(this).find('span, .modal-product-more-text');
        var newText = text.text() === 'Xem thêm' ? 'Rút gọn' : 'Xem thêm';
        var newHeight = newText === 'Xem thêm' ? defaultHeight : '100%';

        $(this).find('.product-des-bg, .modal-product-more-bg').toggle();
        $(contentSelector).css('height', newHeight);
        text.text(newText);
    });
}

exports.toggleContent = toggleContent;