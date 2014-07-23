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
		$('#infobox').show(function(){
			$("#infobox").animate({bottom: '0px' }, 300, function() {
				$("#infobox > div").hide();
				$('#' + $(temp_this).parent().attr('id') + '_info').show();
				$("#infobox").animate({bottom: '100px' }, 300);
				$("#fade_bg").fadeIn();
				$('.close').show();
			});
		});
		return false;
	});

	//Expand more info button on hover
	$(".more").hover(function(){
		$(this).stop().animate({width: '225px' }, 200).css({'z-index' : '10'}); //Change the width increase caption size
	}, function () {
		$(this).stop().animate({width: '50px' }, 200).css({'z-index' : '3'});
	});

	//Remove background, info box and hide all descriptions
	$("#fade_bg, .close").click(function(){
		$('.close').show();
		$("#infobox").animate({bottom: '0px' }, 300, function() {
			$('#infobox').hide(function(){
				$("#infobox > div").hide();
			});
		});
		return false;
	});
});
