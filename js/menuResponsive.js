$(document).ready(function() {
	var windowWidth = $(this).width();

	if (windowWidth < 550) {
		$('#btnMenu').css({'display' : 'block'});
		$('#menu').removeClass('menu').addClass('menuResponsive').css({'margin-left' : '-100%'});
	} else {
		$('#btnMenu').css({'display' : 'none'});
		$('#menu').removeClass('menuResponsive').addClass('menu').css({'margin-left' : '0px'});
	}

	if (windowWidth > 550 && windowWidth < 700) {
		$('#menu').css({'justify-content' : 'center'});
	} else {
		$('#menu').css({'justify-content' : 'right'});
	}
});

$(window).resize(function(){
	var windowWidth = $(this).width();

	if (windowWidth <= 810) {
		$('#btnMenu').css({'display' : 'block'});
		$('#menu').removeClass('menu').addClass('menuResponsive').css({'margin-left' : '-100%'});
	} else {
		$('#btnMenu').css({'display' : 'none'});
		$('#menu').removeClass('menuResponsive').addClass('menu').css({'margin-left' : '0px'});
	}

	if (windowWidth >= 550 && windowWidth <= 810) {
		$('#menu').css({'justify-content' : 'center'});
	} else {
		$('#menu').css({'justify-content' : 'right'});
	}
});

$('#btnMenu').click(function(){
	var menuMargin = $('#menu').css('margin-left');
	menuMargin = parseInt(menuMargin);

	if (menuMargin < 0) {
		$('#menu').css({'margin-left' : '0px'});
		$('.container').css({'display' : 'block'});
	} else {
		$('#menu').css({'margin-left' : '-100%'});
		$('.container').css({'display' : 'none'});
	}
});
