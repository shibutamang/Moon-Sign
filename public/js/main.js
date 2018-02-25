
$(window).scroll(function (e) {
    if($(document).scrollTop() > 20)
    {
      $('nav').addClass('shrink');
    }
    else {
      $('nav').removeClass('shrink');
    }
});
