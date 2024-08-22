$(document).ready(function() {
    $('#scrollButton').on('click', function(e) {
        e.preventDefault(); // Prevent the default action
        $('html, body').animate({
            scrollTop: $('#bodyType').offset().top
        }, 600); // 600 is the duration in milliseconds
    });

    const sections = [
        { name: 'bodyType', next: '#fuelType' },
        { name: 'fuelType', next: '#budget' },
        { name: 'budget', next: '#contacts' }
    ];

    sections.forEach(function(section, index) {
        $(`input[name="${section.name}"]`).on('change', function () {
            const currentSection = $(this).closest('section');
            const nextSection = $(section.next);

            currentSection.fadeOut(400, function() {  // Fade out the current section
                nextSection.removeClass('d-none').hide().fadeIn(400);  // Show the next section with fade in
            });
        });
    });
});
