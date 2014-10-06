;(function ()
{ 'use strict';

	window.addEventListener('load', function ()
	{
		document.documentElement.style.height = window.screen.availHeight + 'px';

		window.addEventListener('resize', function ()
		{
			document.documentElement.style.height = window.screen.availHeight + 'px';
		});

		var menu = document.getElementById('menu');

		menu.addEventListener('click', function ()
		{
			var body = document.body;

			if (body.classList.contains('menu-active'))
			{
				body.classList.remove('menu-active');
			}
			else
			{
				body.classList.add('menu-active');
			}
		}, false);
	}, false);
})();