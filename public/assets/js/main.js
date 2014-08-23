$(document).ready(function ()
{
	var rem = function (count)
	{
		var unit = parseInt($('html').css('font-size'));

		if (typeof count !== 'undefined' && count > 0)
		{
			return (unit * count);
		}
		else
		{
			return unit;
		}
	}

	var openMenu = function (menu)
	{
		var nav = $('body > header').find('nav');

		nav.removeClass('closed');
		nav.addClass('open');

		// nav.css({ 'height' : 'auto' });
		// var height = nav.height();
		// nav.css({ 'height' : 0 });

		// nav.animate({
		// 	'height' : height
		// }, function () {
		// 	nav.animate({
		// 		'opacity' : 1
		// 	}, 200);
		// });
	}

	var closeMenu = function (menu)
	{
		var nav = $('body > header').find('nav');

		nav.removeClass('open');
		nav.addClass('closed');

		// nav.animate({
		// 	'opacity' : 0
		// }, 200, function () {
		// 	nav.animate({
		// 		'height' : 0
		// 	});
		// });
	}

	var body = $('body');
	var header = $('body > header');
	var height = (window.innerHeight - rem(4));

	header.css({
		'margin-top' : height
	});

	var distance = header.offset().top;

	$(window).scroll(function ()
	{
		var headerHasClass = header.hasClass('locked')
		if ($(this).scrollTop() >= distance)
		{
			if (!headerHasClass)
			{
				header.addClass('locked');
				header.css('margin-top', 0);

				body.css('margin-top', (height + rem(4)));
			}
		}
		else
		{
			if (headerHasClass)
			{
				header.removeClass('locked');
				header.css('margin-top', height);
				body.css('margin-top', 0);
			}
		}
	});

	// On click, toggle menu open/close
	$('body > header').on('click', '.menu-icon', function ()
	{
		$(this).toggleFunction(openMenu, closeMenu, $(this));
	});

	// On click, scroll to the next article/section
	$('body > main').on('click', '.js-scroll-next', function ()
	{
		// Still getting a rendering error on some sections... (usually only off by a few pixels)
		var target = $(this).parents('article, section').next();
		var offset = target.offset().top - rem(3);

		$('body').animate({
			scrollTop: offset
		}, 1000);
	});
});