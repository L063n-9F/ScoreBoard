$(document).ready(function() {

    var $toggleButton = $('.Navbar-Sitemenu-icon'),
        $menuWrap = $('.menu-wrap');

    $toggleButton.on('click', function() {        
        $menuWrap.toggleClass('menu-show');
    });

    $('.Navbar-modalClose.Navbar-icon').click(function() {
    	$menuWrap.removeClass('menu-show');
    });

    $('.menu-item.1').click(function()  {
    if (!$('.profile_1').hasClass('show')) {	
	$('.menu-item').not(this).removeClass('active');
	$(this).toggleClass('active');
	$('.profile_1').toggleClass('show');
	$('.profile_2').removeClass('show');
	$('.profile_3').removeClass('show');
	$('.profile_4').removeClass('show');
	$menuWrap.removeClass('menu-show');
	$('.total').css({ display: "none" });
	} else $menuWrap.removeClass('menu-show')});

    $('.menu-item.2').click(function() {
    if (!$('.menu-item.2').hasClass('active')) {
	$('.menu-item').not(this).removeClass('active');
	$(this).toggleClass('active');
	$('.profile_2').toggleClass('show');
	$('.profile_1').removeClass('show');
	$('.profile_3').removeClass('show');
	$('.profile_4').removeClass('show');
	$menuWrap.removeClass('menu-show');
	$('.total').css({ display: "none" });
	}else $menuWrap.removeClass('menu-show')});

	$('.menu-item.3').click(function() {
	if (!$('.menu-item.3').hasClass('active')) { 
	$('.menu-item').not(this).removeClass('active');
	$(this).toggleClass('active');
	$('.profile_3').toggleClass('show');
	$('.profile_1').removeClass('show');
	$('.profile_2').removeClass('show');
	$('.profile_4').removeClass('show');
	$menuWrap.removeClass('menu-show');
	$('.total').css({ display: "none" });
	}else $menuWrap.removeClass('menu-show')});

	$('.menu-item.4').click(function() {
	if (!$('.menu-item.4').hasClass('active')) {
	$('.menu-item').not(this).removeClass('active');
	$(this).toggleClass('active');
	$('.profile_4').toggleClass('show');
	$('.profile_1').removeClass('show');
	$('.profile_2').removeClass('show');
	$('.profile_3').removeClass('show');
	$menuWrap.removeClass('menu-show');
	$('.total').css({ display: "none" });
	}else $menuWrap.removeClass('menu-show')});

	$('.menu-item.5').click(function() {
	if (!$('.menu-item.5').hasClass('active')) {
	$('.menu-item').not(this).removeClass('active');
	$(this).toggleClass('active');
	$('.profile_1').removeClass('show');
	$('.profile_2').removeClass('show');
	$('.profile_3').removeClass('show');
	$('.profile_4').removeClass('show');
	$('.total').css({ display: "flex" });
	$menuWrap.removeClass('menu-show');
	}else $menuWrap.removeClass('menu-show')});

    });

