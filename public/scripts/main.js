function scrollToAnchor(aid){
    $('html,body').animate({scrollTop: $(aid).offset().top } , 'slow');
}

$("#scroll-down").click(function(e) {
    e.preventDefault();
    scrollToAnchor('#services');
});
