function valText(str,len){
	return str.length >= len;
}
function valMail(str){
	var mailPatt = /^[a-z0-9+_%.-]+@(?:[a-z0-9-]+\.)+[a-z]{2,6}$/i ;
	return mailPatt.test(str);
}
$(function(){
	$('#form').submit(function(){
		var target,err = false;
		target = $('#name');
		if (valText(target.val(),2)) {
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		};
		target = $('#subject');
		if (valText(target.val(),4)) {
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}
		target = $('#mail');
		if (valText(target.val(),6)) {
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;								
		}
		target = $('#text');
		if (valText(target.val(),8)) {
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}
		if (!err) {
			$('#frame').animate({
				height : '100px'
			},600);
		};
		return !err ;
	});
	$('#reset').click(function(){
		$('#frame').animate({
			height:'0px'
		},200);
	});
})