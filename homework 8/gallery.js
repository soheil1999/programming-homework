Math.rnd = Math.random;
Math.random=function(a,b){
	if(!a && !b) return Math.rnd();
	return Math.floor(Math.rnd()*(b-a+1))+a;
}
$(function(){
	var pics = $('div.gallery a');
	pics.each(function(){
		$(this).animate({
			left:Math.random(-50,450),
			top:Math.random(-50,450),
			opacity:0.9,
			'-webkit-transform':'rotate('+Math.random(-90,90)+'deg)'
		},500);
		pics.mouseover(function(){
			$(this).animate({
				opacity:0.98,
				'z-index':2
			},100);
		pics.mouseout(function(){
			$(this).animate({
				opacity:0.9,
				'z-index':1
			},100);


		})
	});
});