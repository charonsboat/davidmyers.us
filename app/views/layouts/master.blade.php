<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, user-scalable=no">
	<title>David Myers{{{ isset($title) ? ' | '.$title : null }}}</title>

	{{ HTML::style('/assets/vendor/css/reset.css') }}
	{{ HTML::style('/assets/css/main.css') }}
	{{ $customCss or null }}
	{{ HTML::script('/assets/vendor/js/modernizr-2.8.2.min.js') }}
</head>
<body>
	<!--[if lt IE 9]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<header>
		<div>
			<h1 id="title"><a href="/">David Myers</a></h1>
			<div class="menu-icon">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
		<nav>
			<ul>
				<!-- <li><a href="/">Home</a></li> -->
				<li><a href="/blog">Blog</a></li>
				<li><a href="/portfolio">Portfolio</a></li>
				<li><a href="/contact-me">Contact Me</a></li>
			</ul>
		</nav>
	</header>
	<main>
		@yield('main')
	</main>
	{{ HTML::script('/assets/vendor/js/jquery-1.11.0.min.js') }}
	{{ HTML::script('/assets/vendor/js/selectivizr-1.0.2.min.js') }}
	{{ HTML::script('/assets/js/plugins.js') }}
	{{ HTML::script('/assets/js/main.js') }}
	{{ $customJs or null }}

	<!-- Need to make minified scripts -->
</body>
</html>