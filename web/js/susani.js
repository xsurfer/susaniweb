$(".audio")
  .each(function(i) {
    if (i != 0) { 
      $("#beep-two")
        .clone()
        .attr("id", "beep-two" + i)
        .appendTo($(this).parent()); 
    }
    $(this).data("beeper", i);
  })
  .mouseenter(function() {
    $("#beep-two" + $(this).data("beeper"))[0].play();
  });
$("#beep-two").attr("id", "beep-two0");


$(window).load(function() {
	//$('.leone').lionbars();
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: true,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});





$.validator.setDefaults({
	submitHandler: function(form) {
	    // return false to prevent normal browser submit and page navigation 
	    return false; 
	}
});

$(document).ready(function() {
	
	$('.news').innerfade({
		animationtype: 'slide',
		speed: 1500,
		timeout: 6000,
		type: 'sequence',
		containerheight: '20px'
	});
	
	var options = { 
		    target:     '.msg_box', 
		    success:    function() { 
		    	$('.msg_box').animate(
		    		{
						height		: '20px'
					}, 400)
				.delay(2000).fadeOut();
		    	$('#contattaci').resetForm();		    	
		    	$('.msg_box').show();
		    	$('.msg_box').height(0);
		    } 
		}; 
	$('#contattaci').ajaxForm(options);
	$("#contattaci").validate();
	

});



