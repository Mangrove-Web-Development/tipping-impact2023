import $ from 'jquery'

function scrollToTargetElement(target, event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $(target).offset().top
    }, 1000);
}

export default function initScroll() {
    $('a').click(function(event) {
        let target = $(this).attr('href');
        if (target.startsWith('#')) {
            scrollToTargetElement(target, event);
        }
    });
}