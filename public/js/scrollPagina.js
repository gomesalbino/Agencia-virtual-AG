
$('nav a').click(function (e) {
    e.preventDefault()
    let id = $(this).attr('href');
    targetOffset = $(id).offset().top,
    menuHeight = $('nav').innerHeight();
    
    $('html, body').animate({
        scrollTop: targetOffset - menuHeight
    }, 1500);
});


