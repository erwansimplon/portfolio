$(function() {
    $('.accueil-menu, .presentation-menu, .projet-menu, .contact-menu').on('click', function(event) {
        var page = $(this).attr('href'),
            speed = 1500,
            $body = $('html, body');

        $body.animate({
            scrollTop: $(page).offset().top
        }, speed);

        event.preventDefault();
    });
});
