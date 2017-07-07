$(function(){
	var header = document.getElementById('header');
	var headroom = new Headroom(header);
	headroom.init();

	//Menu
	// Calculo ancho
	var ancho = $(window).width(),
		enlaces = $('#enlaces'),
		bntMenu = $('#bnt-menu'),
		icono = $('#bnt-menu .icono');

	iif ( ancho < 800) {
			enlaces.hide();
			icono.addClass('fa-bars');
		}

		btnMenu.on('click', function(e){
			enlaces.slideToggle();
		});

		$(window).on('resize', function(){
			if($(this).width() > 800){
				enlaces.show();
				icono.addClass('fa-times');
				icono.removeClass('fa-bars');
			} else{
				enlaces.hide();
				icono.addClass('fa-bars');
				icono.removeClass('fa-times');
			}
		});

});