// script scroll link
$(document).ready(function() {
    $(".scroll-link").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: ($(hash).offset().top - 50) // mengurangi 50px setelah animasi selesai
            }, 800, function() {
                window.location.hash = hash;
            });
        }
    });
});

// shrink navbar remove
$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
        $('.navs').addClass('affix');
        console.log("OK");
    } else {
        $('.navs').removeClass('affix');
    }
});

