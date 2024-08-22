$(document).ready(function() {
    $('#scrollButton').on('click', function(e) {
        e.preventDefault(); // Prevent the default action
        $('html, body').animate({
            scrollTop: $('#bodyType').offset().top
        }, 600); // 600 is the duration in milliseconds
    });
});
