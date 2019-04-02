;$(function(){
	
	var header = $('header'), nav = $('nav'), doc = $(document), footer = $('footer'), contenido = $('.contenido'), gatillo = $('.gatillo'), body = $('body');

	var tamanios = function (){	
		nav.css({ height: doc.height() - header.height() });
		contenido.css({ marginTop: header.height() })
	}

	gatillo.on('click', function(){
		if (body.hasClass('menu-activo')) {
			body.removeClass('menu-activo');
			body.addClass('menu-oculto');
		}else{
			body.removeClass('menu-oculto');
			body.addClass('menu-activo');
		}
	});

	tamanios();

	$(window).on('resize', function(){
		tamanios();
	})

});