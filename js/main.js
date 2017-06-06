jQuery(window).scroll(function(){
    var vscroll = $(this).scrollTop();
    $('#logotext').css({
        "transform" : "translate(0px, "+vscroll/2+"px)"
    });

    var vscroll = $(this).scrollTop();
    $('#back-flower').css({
        "transform" : "translate(0px, -"+vscroll/12+"px)"
    });

    var vscroll = $(this).scrollTop();
    $('#for-flower').css({
        "transform" : "translate(0px, -"+vscroll/2+"px)"
    });
});