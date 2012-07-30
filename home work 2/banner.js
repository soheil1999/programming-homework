window.onload = function(){
	var slide = document.getElementsByClassName('slide').item(0);
	var lists = slide.getElementsByClassName('btns').item(0).getElementsByTagName('li');

	var currentSlide = 0
	gotoslide = function(n){
		if(n>lists.length-1) n=0;
		train.style.left=(-450*n) + 'px';
		lists.item(currentSlide).className = '';
		lists.item(n).className = 'active';
		currentSlide=n;
	}
	nextSlide = function(){
		go2slide(currentSlide+1);

	gotoslide = function(n){
		train.style.left=(-450*n) + 'px';
	}
	for (var i = 0; i < lists.length; i++) {
		function = tempo(){
			lists.item(j).onclick=function(){
			alert(j);
			}
		}
		tempo(i);
	}
		setInterval(nextSlide,500);
}