<!doctype html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8" lang="en">        <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9" lang="en">               <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en">                              <!--<![endif]-->
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>David Myers{{{ isset($title) ? ' | '.$title : null }}}</title>

	{{ HTML::style('./assets/css/vendor/normalize.css') }}
	{{ HTML::style('./assets/css/main.css') }}
	{{ $customCss or null }}
</head>
<body>
	<header>
		<div class="container">
			<h1>{{ HTML::link('/', 'David Myers') }}</h1>
			<div id="menu">
				<div></div>
				<div></div>
				<div></div>
			</div>
			<nav>
				<ul>
					<li><a href="./#home" data-scroll>Home</a></li>
					<li><a href="./#about" data-scroll>About</a></li>
					<li><a href="./#skills" data-scroll>Skills</a></li>
					<li><a href="./#contact" data-scroll>Contact</a></li>
					<li><a href="./blog">Blog</a></li>
				</ul>
			</nav>
		</div>
	</header>

	@if (Session::has('flash_notice'))
	<section id="flash_notice-container">
		<div id="flash_notice" class="container">
			<h4>{{ Session::get('flash_notice') }}</h4>
			<h4 id="flash_notice-close">&#8553;</h4>
		</div>
	</section>
	@endif

	@yield('main')

	<!-- Contact Section -->
	<!-- <section id="contact">
		<div class="container">
			
		</div>
	</section> -->

	{{ HTML::script('./assets/js/smoothscroll.js') }}
	{{ HTML::script('./assets/js/main.js') }}
	{{ $customJs or null }}
</body>
</html>