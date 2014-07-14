$(document).ready(function() {

	$(".house").mouseenter(function() {
		$("#enter").stop().fadeTo('slow', 1);
	});
	$('.house').mouseleave(function() {
		$("#enter").stop().fadeTo('slow', .0);
	});

	$('#enter').click(function(){
		$(".house").hide();
		$(".house-interior").show();
	});

	//set opacity to 0.4 for all the images
	//opacity = 1 - completely opaque
	//opacity = 0 - invisible

	$('.row img').css('opacity', 1);

	// when hover over the selected image change the opacity to 1
	$('.row img').hover(
			function(){
				$(this).stop().fadeTo('slow', 0.4, function(){
					$(this).next().find('label').css({'z-index' : 2 });
				});
			},
			function(){
				$(this).stop().fadeTo('slow', 1).next().find('label').css({'z-index' : 0 });
			}
			);

	// we have to wait until the image is clicked
	$(".window-wrapper img").on('click', function(){
		src = $(this).attr('src');
		$(".house-interior").css({'background' : 'none'});
		$(".house-interior .row").hide();

		// let's hide the interior
		// $(".house-interior").html($('#myDiv img').attr('src', $(this).attr('src')));


		$.ajax({
			method : 'GET',
			url : window.location.protocol + '//' + window.location.hostname + '/belluck-and-fox/asbestos-finder/index.php/main/test',
			returnType : 'html',
			success : function (data) {
				$('#myDiv').html(data);

				$('#pic-background').attr('src', src);
				$('#myDiv').show();
			}
		});


	});



});

