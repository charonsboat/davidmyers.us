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

	var isLocked = function(element)
	{
		if (element.hasClass('locked'))
			return true;
		else
			return false;
	}

	var setTopMargin = function (element, amount)
	{
		element.css('margin-top', amount);
	}

	var setHeader = function()
	{
		if ($(this).scrollTop() >= distance)
		{
			if (!isLocked(header))
			{
				header.addClass('locked');

				header.css('margin-top', 0);
				body.css('margin-top', (height + rem(4)));
			}
		}
		else
		{
			if (isLocked(header))
			{
				header.removeClass('locked');

				header.css('margin-top', height);
				body.css('margin-top', 0);
			}
			else if (header.css('margin-top') != height)
			{
				header.css('margin-top', height);
			}
		}
	}

	var body = $('body');
	var header = $('body > header');
	var windowHeight = window.innerHeight;
	var height = (windowHeight - rem(4));
	var distance = height;

	var landing = $('#landing');
	var landingHeight = landing.height();

	landing.css('height', landingHeight);

	setTopMargin(header, height);

	$(window).resize(function ()
	{
		var newHeight = window.innerHeight - rem(4);
		
		if (newHeight < height)
		{
			height = newHeight;
			distance = height;
		}

		setHeader();
	});

	$(window).scroll(function ()
	{
		setHeader();

		var scrollTop = $(this).scrollTop();

		//landing.css('height', (height + (scrollTop / 3)));
		landing.css('top', (-1 * (scrollTop / 10)));
	});

	// // On click, toggle menu open/close
	// $('body > header').on('click', '.menu-icon', function ()
	// {
	// 	$(this).toggleFunction(openMenu, closeMenu, $(this));
	// });

	$('body > header').on('click', 'nav ul a', function (e)
	{
		e.preventDefault();

		var target = $($(this).attr('href'));
		var offset = target.offset().top;

		$('body > header a').removeClass('active');
		$(this).addClass('active');

		$('body').animate({
			scrollTop: offset
		}, 1000);
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