$(document).ready(function(){

	$('#botao_menu_lateral').bind("click", function(){
		console.log($('.menu_lateral').css('display'));
		if( $('.menu_lateral').css('display') == 'none') {
			$('.menu_lateral').css('display', 'block');
		}else {
			$('.menu_lateral').css('display', 'none');
		}
	});

	console.log($(document).height());
	console.log($('.menu_lateral').css('min-height'));
	if( $('.menu_lateral').css('min-height') != 'auto' && $('.menu_lateral').css('min-height') > '0px'){
		var height = $(document).height();
		height = height - 190;
		$('.menu_lateral').css('min-height', height);
	}

});