$(window).load(function() {

    $('.js-partners__slider').carouFredSel({
        circular: false,
        auto    : false,
        width : '100%',
        align : 'center',      
        prev: {
            button: ".js__prev",
            key:"left",
            items:1
        },
        next: {
            button: ".js__next",
            key:"right",
            items:1
        }
    });

    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('.page_top').fadeIn();
        } else {
            $('.page_top').fadeOut();
        }
    });

    $('.page_top').click(function() {
        $('body,html').animate({scrollTop:0},800);
    });
});


                
    

