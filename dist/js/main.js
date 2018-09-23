$(document).ready(function () {
	$('.sliderTrening').slick({
		prevArrow: '<div class="arrow left"><img src="img/left.svg", alt=""></div>',
		nextArrow: '<div class="arrow right"><img src="img/right.svg", alt=""></div>',
		responsive: [{
			breakpoint: 490,
			settings: {
				arrows: false
			}

		}]
	});
	$('.sliderBlog').slick({
		prevArrow: '<div class="arrow left"><img src="img/left.svg", alt=""></div>',
		nextArrow: '<div class="arrow right"><img src="img/right.svg", alt=""></div>',
		responsive: [{
			breakpoint: 490,
			settings: {
				arrows: false
			}

		}]
	});

	$('.calendar').multiDatesPicker();
//Accordeon
	$(document).ready(function () {
		if ($(window).width() >= '768') {
			$('.accordeon>.bottomAccordeon').not(':first').hide();

		} else {
			$('.accordeon>.bottomAccordeon').hide();
		}

	});

	$(window).resize(function () {
		var xalk = $('.accordeon>.bottomAccordeon').first();

		if ($(window).width() >= '768') {
			$(xalk).show();
		} else {
			$('.accordeon>.bottomAccordeon').hide();
		}
	});

	$('.accordeon>.topAccordeon').click(function () {
		var all = $('.accordeon>.topAccordeon').removeClass('active');
		var top = $(this).addClass('active');

		var findAcc = $(this).next('.bottomAccordeon');
		var findClosest = $(this).closest('.accordeon');

		if (findAcc.is(':visible')) {
			findAcc.slideUp(1000);
		} else {
			findClosest.find('>.bottomAccordeon').slideUp(1000);
			findAcc.slideDown(1000);
		}

	});
//Small menu
	var smallMenu = $('.smallMenuWrapper').find('.hamburger');
	var smallMenuHide = $('.smallMenuShow').find('.hamburger');
	var pulce = $('.pulse');
	smallMenu.click(function () {
		$('.smallMenuShow').show('slide', {
			direction: 'down'
		}, 600);
		$(smallMenuHide).addClass('is-active');
		$('body').addClass('bodyHidden');
		// pulce.css('zIndex', '0');
	});
	smallMenuHide.click(function () {
		$('.smallMenuShow').hide('slide', {direction: 'up'}, 600);
		$(this).removeClass('is-active');
		$('body').removeClass('bodyHidden');
		// pulce.css('zIndex', '1');
	});

//SEARCH
	$('.fa-search').click(function () {
		$('.searchWrapper').show('fade');

	});
	$('.searchWrapper .hamburger').click(function () {
		$('.searchWrapper').hide('fade');

	});
	var search = $('#s');
	var lab = $('.screen-reader-text');
	$('.searchWrapper').click(function () {
		if (search.val() != '') {
			$('.screen-reader-text').hide();
		}
		if (search.val() == '' && !search.is(':focus')) {
			$('.screen-reader-text').show();
		} else {
			$('.screen-reader-text').hide();
		}


	 });
});


// jQuery(function ($) {
// 	$(document).ready(function (e) {
// 		$('.input-field').click(function () {
// 			$(this).children(['label']).addClass('active')
// 		});
// 	});
// 	$(document).mouseup(function (e) { // событие клика по веб-документу
// 		var div = $(".input-field"); // тут указываем ID элемента
// 		var test = $("label"); // тут указываем ID элемента
// 		var name = $("#name"); // тут указываем ID элемента

// 		if (!div.is(e.target) // если клик был не по нашему блоку
// 			// && div.has(e.target).length === 0 // и не по его дочерним элементам
// 			&& name.val() == '') //и если блок пустой
// 			{
// 			test.removeClass('active') // скрываем его
// 		}
// 	});
// });