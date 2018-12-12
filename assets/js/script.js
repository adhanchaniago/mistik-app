// event scroll link pada saat di click

// $('.page-scroll').on('click', function () {

// 	var tujuan = $(this).attr('href');

// 	var elemenTujuan = $(tujuan);

// 	$('html', 'body').animate({
// 		scrollTop: elemenTujuan.offset().top
// 	});

// });

// Change color on scroll

$(window).scroll(function () {
	$('nav').toggleClass('scrolled', $(this).scrollTop() > 10);
})

$(window).scroll(function () {
	$('.nav-link').toggleClass('scrolled', $(this).scrollTop() > 10);
})

$(window).scroll(function () {
	$('.nav-link span').toggleClass('scrolled', $(this).scrollTop() > 10);
})

$(window).scroll(function () {
	$('.tombol').toggleClass('scrolled', $(this).scrollTop() > 10);
})
