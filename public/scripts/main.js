;(function($){

    $(document).ready(function(){
        functions.navigation();
        functions.scrollToAnchor();
    })

    var functions = {

        navigation: function() {
            var siteWrapper = $('#site-wrapper'),
                showNavClass = 'show-nav',
                toggleNav = function () {
                    siteWrapper.toggleClass(showNavClass);
                };

            $('.toggle-nav').click(function() {
                toggleNav();
            });
            $(document).keyup(function(e) {
                if (e.keyCode == 27) {
                    toggleNav();
                }
            });
        },

        scrollToAnchor: function(aid){
            $("#scroll-down").click(function(e) {
                e.preventDefault();
                $('html,body').animate({scrollTop: $('#services').offset().top }, 'slow');
            })
        }

    };

})(jQuery);


