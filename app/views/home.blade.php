@section('main')

<!-- Home Section -->
<section id="home">
	<div class="container">
		
	</div>
</section>

<!-- About Section -->
<section id="about">
	<div class="container">
		<h2>About Myself</h2>

		<div id="profile">
			{{ HTML::image('assets/images/profile.jpg', 'Profile Photo') }}
		</div>
		<div>
			<p>Hello. I'm David. I'm a developer based in <a href="https://www.google.com/maps/place/Columbus,+Ohio">Columbus, Ohio</a>. I'm a full stack engineer that specializes in designing responsive, mobile-first, scalable web applications. I constantly work with current technologies such as jQuery, Modernizr and Sass, and I follow the latest standards such as HTML5 and CSS3. I also understand that following standards doesn't mean dropping support, and I can very effectively support backwards compatibility for older browsers.</p>
		</div>
	</div>
</section>

<!-- Skills Section -->
<section id="skills">
	<div class="container">
		<h2>My Skill Set</h2>

		<div>
			<h3>Front End</h3>
			<ul>
				<li>HTML/5 &amp; CSS/3</li>
				<li>Responsive Design</li>
				<li>Mobile-First Design</li>
				<li>JavaScript &amp; jQuery</li>
				<li>Dynamic Websites w/ Ajax</li>
			</ul>

			<h3>Back End</h3>
			<ul>
				<li>PHP w/ MySQL (MariaDB)</li>
				<li>.NET (C#) w/ MS SQL Server</li>
				<li>Database Relational Mapping</li>
				<li>Custom Software Development</li>
			</ul>

			<h3>Frameworks &amp; Libraries</h3>
			<ul>
				<li>Laravel 4</li>
				<li>.NET (4.5) &amp; MVC/5</li>
				<li>EntityFramework 6</li>
				<li>jQuery &amp; jQueryUI</li>
				<li>Modernizr</li>
			</ul>
		</div>
	</div>
</section>

<section id="contact">
	<div class="container">
		<h2>Contact</h2>

		<h3>self <span class="accent">[at]</span> davidmyers.us</h3>
	</div>
</section>

@stop
