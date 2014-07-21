$(document).ready(function() {

	$(".house").mouseenter(function() {
		$("#enter").stop().fadeTo('slow', 1);

		$('.house img').stop().fadeTo('slow', 0.4);
	});
	$('.house').mouseleave(function() {
		$("#enter").stop().fadeTo('slow', .0);
		$('.house img').stop().fadeTo('slow', 1);
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
		id = $(this).attr('id');

		if(id == 'attic'){
			src = src.replace(/[\-left|\-right]+\.png/g,".jpg");
		}

		// find the name of the image from the last index of the url
		image_name  = src.substr(src.lastIndexOf('/') + 1);

		// strip the work jpg and that's the name of our file
		file = image_name.replace(/([\-\w\W\d]+)\.[jpg]+/g,"$1");

		$(".house-interior").css({'background' : 'none'});
		$(".house-interior .row").hide(function() {
			$('.back-to-interior').show();
		});

		$.ajax({
			method : 'GET',
			url : window.location.protocol + '//' + window.location.hostname + '/index.php/main/interior/' + file,
			returnType : 'html',
			success : function (data) {
				$('.interior-image').html(data);
				$('#pic-background').attr('src', src);
				$('.interior-image').show();
			}
		});

	});

	$('.back-to-interior').on('click', function() {
		$('.interior-image').hide(function() {
			$('.back-to-interior').hide();
			$('.house-interior').css({'background' : 'url("assets/imgs/interior.png") center center no-repeat'});
		});
		$('.row').show();
	});

});

