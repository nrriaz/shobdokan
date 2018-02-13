var $item = $('.carousel-item'); 
var $wHeight = $(window).height();
var $adjust=200;
$item.eq(0).addClass('active');
$item.height($wHeight-$adjust); 
$item.addClass('full-screen');

$('.carousel img').each(function() {
  var $src = $(this).attr('src');
  var $color = $(this).attr('data-color');
  $(this).parent().css({
    'background-image' : 'url(' + $src + ')',
    'background-color' : $color
  });
  $(this).remove();
});

$(window).on('resize', function (){
  $wHeight = $(window).height();
  $item.height($wHeight-$adjust);
});

$('.carousel').carousel({
  interval: 6000,
  pause: "false"
});