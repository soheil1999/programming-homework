$(function(){
	var menu = $('nav.menu .btns');
	var delay = 500;
	menu.each(function(){
		$(this).animate({
			top:-75
		},delay)
		delay+=500;
		menu.mouseover(function(){
			$(this).animate({
				top:-50,
				background:'gray'
			},500)		
		});
		menu.mouseout(function(){
			$(this).animate({
				top:-75,
				background:'white'
			},500)	
		});		
		menu.click(function(){
			$(this).animate({
				top:500,
				//"-webkit-transform":"rotate("280")"+'deg'
				width:500

			},500)
		});	
		/*menu.dblclick(function(){
			$(this).animate({
				top:-75,
				//"-webkit-transform":"rotate("280")"+'deg'
				width:150

			},500)
		});
		*/				
	});

});