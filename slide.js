$(function(){
	var slide = $('div.slide'),
	train = $('div.slide div.train'),
	list = $ ('div.slide ul.btns li'),
	currentSlide = 0

	(goToSlide = function(n) {
		if(n>btns.length-1) n=0;
		if (n<0) n=btns.length-1;
		train.style.left=(-450*n)+'px';
		btns.item(currentSlide).className = ''
		btns.item(n).className = 'active';
		currentSlide=n;

	})(0)
	list.click(function(){
		goToSlide($(this).index())
	});
	$('div.slide div.next').click(nextSlide=function(){
		goToslide(currentSlide+1);
	})

	$('div.slide .previous').click(function(){
		goToslide(currentSlide-1);
	});
	var autoPlayIv = false;
	(autoPlayStart = function(){
		if(autoPlayIv) return;
		autoPlayIv = setInterval(nextSlide, 5000);
	})();

	autoPlayStop = function(){
		clearInterval(autoPlayIv);
		autoPlayIv = false;
	}
	slide.mouseover(autoPlayStop);
	slide.mouseout(autoPlayStart);
})