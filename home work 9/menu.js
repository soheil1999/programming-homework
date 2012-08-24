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
	});

});