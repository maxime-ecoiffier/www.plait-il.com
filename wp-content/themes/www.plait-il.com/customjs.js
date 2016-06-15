$('.showmenuresponsive').on('click', function(){
	$('.responsivemenu').toggle('slow')
    $('.responsivemenuhome').toggle('slow')
})

/*$(".responsivemenu a").each(function() {
   var $this = $(this);
   var _href = $this.attr("href");
   $this.attr("href", _href + link);
});
*/

$('.responsivemenuhome a').on('click', function(){
    $('.responsivemenuhome').css('display', 'none')
})
