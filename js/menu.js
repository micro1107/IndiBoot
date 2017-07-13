$(document).ready(function(){
	// Responsive Menu
	$(".boton-menu span").click(function(e){
		e.preventDefault();
		if ($(".boton-menu span").attr('class') == 'icon icon-menu') {
			$(".boton-menu span").removeClass('icon icon-menu').addClass('icon icon-cancel');
			$(".navegacion nav").animate({left:'0'})
		}
		else{
			$(".boton-menu span").removeClass('icon icon-cancel').addClass('icon icon-menu');
			$(".navegacion nav").animate({left:'-100%'})
		}
	});

	// Nav responsive
	var ancho1 = $(window).width();
	if(ancho1 <= 768){
		$(".navegacion nav").addClass('nav-responsive')
	}else{
		$(".navegacion nav").removeClass('nav-responsive')
	}

	$(window).resize(function(){
		var ancho2 = $(window).width();
		if(ancho2 <= 768){
			$(".navegacion nav").addClass('nav-responsive')
		}else{
		$(".navegacion nav").removeClass('nav-responsive')
		}
	});

	// Menu pegajoso
	//56 42
	var navTop = $('.navegacion').offset().top;
	var navAlto = $('.navegacion').height();
	
	$(window).scroll(function(){
		if($(window).scrollTop() > navTop){
			$('.navegacion').css({'position':'fixed','top':'0', 'z-index':'1'})
			$('body').css({'padding-top':navAlto})
		}
		else{
			$('.navegacion').css({'position':'','top':''})
			$('body').css({'padding-top':'0'})
		}
	});
});
