window.onload = function(){
	var slide = document.getElementsByClassName('slide').item(0);
	var lists = slide.getElementsByClassName('btns').item(0).getElementsByTagName('li');
	var currentSlide = 0
	gotoslide = function(n){
		train.style.left=(-450*n) + 'px';
		lists.item(currentSlide).className = '';
		lists.item(n).className = 'active';
		currentSlide=n;
	}
	for (var i = 0; i < lists.length; i++) {
		function = tempo(){
			lists.item(j).onclick=function(){
			alert(j);
			}
		}
		tempo(i);
	}

}