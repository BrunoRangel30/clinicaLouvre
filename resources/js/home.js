$(document).ready(function() {
    $('.item-menu >a').on('click', function() {

        $(".config-itens .nav-link").removeClass('active')
        $(".config-itens .nav-link").addClass('no-select')
        $(this).removeClass('no-select');
        $(this).addClass('active');
    });
})