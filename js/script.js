$(window).scroll(function() {
    if ($(window).scrollTop() >= 50) {
        $('.navbar').css('background', '#ffa825');
        $('.navbar').css('box-shadow', '0px 2px 4px rgba(0, 0, 0, 0.5)');
    } else {
        $('.navbar').css('background', 'transparent');
        $('.navbar').css('box-shadow', 'none');
    }
});