$(document).ready(function(){
	//Blur Links (Prevents Outline)
	$('a').click(function() {
		this.blur();
	});

	//Hide all item descriptions in the info box
	$("#infobox > div").css("display", "none");

	//Call in the info box
	$(".more a").on('click', function(){
		var temp_this = this;
		$("#infobox").animate({bottom: '-200px' }, 300, function() {
			$("#infobox > div").hide();
			$('#' + $(temp_this).parent().attr('id') + '_info').show();
			$("#infobox").animate({bottom: '233px' }, 300);
			$("#fade_bg").fadeIn();
		});
		return false;
	});
	
	//Expand more info button on hover
	$(".more").hover(function(){
		$(this).stop().animate({width: '225px' }, 200).css({'z-index' : '10'}); //Change the width increase caption size
	}, function () {
		$(this).stop().animate({width: '50px' }, 200).css({'z-index' : '1'});
	});
				
	//Remove background, info box and hide all descriptions
	$("#fade_bg, .close").click(function(){
		$("#infobox").animate({bottom: '-200px' }, 300, function() {
			$("#infobox > div").hide();
		});
		return false;
	});
});
