function rnd(a,b){
	return Math.floor(Math.random()*(b-a+1))+a;
}
$(function{
	var gallery = $('div.gallery');
	var pics = $('div.gallery a');
	pics.each(function{
		$(this).animate({
			left : Math.random(-50,600),
			top : Math.random(0,650)
		});
	},500);

});