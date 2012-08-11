$(function(){
	var slide = $('div.accslide div.train > div');
	slide.last().css({"padding-right":"200px"});
	slide.onmouseover(function(){
		slide.stop().animate({
			'width':'50px'
		},500);
		$(this).stop().animate({
			'width': '300px'
		},500);
		('.accslides').mouseout(function(){
		slide.stop().animate({
			'width':'150px'
		},500);
	});
});