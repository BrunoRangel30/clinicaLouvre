$(document).ready(function() {
    $('.item-menu >a[href^="#"]').on('click', function(e) {
        e.preventDefault()
        var id = $(this).attr('href');
        targetOffset = $(id).offset().top;
        menuHeight = $(".navbar").innerHeight();
        console.log(targetOffset);
        $('html, body').animate({
            scrollTop: targetOffset - menuHeight
        }, 100);
        $(".config-itens .nav-link").removeClass('active')
        $(".config-itens .nav-link").addClass('no-select')
        $(this).removeClass('no-select');
        $(this).addClass('active');
    });
})