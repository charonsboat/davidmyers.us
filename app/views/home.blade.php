@section('main')

<section id="landing">

</section>
<section id="about">
	<header>
		<h2>A little about myself...</h2>
	</header>
	<div class="profile">
		{{ HTML::image('assets/images/profile.jpg', 'Profile Photo') }}
	</div>
	<div>
		<p>Hello. I'm David. I'm a developer based in <a href="https://www.google.com/maps/place/Columbus,+Ohio">Columbus, Ohio</a>. I'm a full stack engineer that specializes in designing responsive, mobile-first, scalable web applications. I constantly work with current technologies such as jQuery, Modernizr and Sass, and I follow the latest standards such as HTML5 and CSS3. I also understand that following standards doesn't mean dropping support, and I can very effectively support backwards compatibility for older browsers.</p>
	</div>
	<!-- <footer>
		<div class="arrow-down js-scroll-next"></div>
	</footer> -->
</section>
<section id="skills">
	<header>
		<h2>My skill set</h2>
	</header>
	<div class="showcase">
		<div class="desktop">
			<div class="monitor">
				<div class="screen">
					<div class="maintain-ratio">
						<div class="filler">
							<div class="website">
								<div class="body">
									<header>
										<div class="title constraint-wrapper"></div>
									</header>
									<div class="main">
										<section>
											<div class="about constraint-wrapper"></div>
										</section>
										<section>
											<div class="information-nodes constraint-wrapper">
												<div class="node accent space-right"></div>
												<div class="node double space-around"></div>
												<div class="node space-left"></div>
												<div class="node double space-right"></div>
												<div class="node accent double space-left"></div>
												<div class="node double space-right"></div>
												<div class="node space-around"></div>
												<div class="node space-left"></div>
											</div>
										</section>
									</div>
								</div>
							</div><!-- end desktop website -->
						</div><!-- end desktop filler -->
					</div><!-- end desktop maintain-ratio -->
				</div><!-- end desktop screen -->
			</div><!-- end desktop monitor -->
			<div class="stand"></div>
			<div class="base"></div>
		</div><!-- end desktop -->
		<div class="tablet">
			<div class="case">
				<div class="screen">
					<div class="maintain-ratio">
						<div class="filler">
							<div class="website">
								<div class="body">
									<header>
										<div class="title constraint-wrapper"></div>
									</header>
									<div class="main">
										<section>
											<div class="about constraint-wrapper"></div>
										</section>
										<section>
											<div class="information-nodes constraint-wrapper">
												<div class="node accent space-right"></div>
												<div class="node space-left"></div>
												<div class="node double"></div>
												<div class="node accent double"></div>
												<div class="node space-right"></div>
												<div class="node space-left"></div>
											</div>
										</section>
									</div>
								</div>
							</div><!-- end tablet website -->
						</div><!-- end tablet filler -->
					</div><!-- end tablet maintain-ratio -->
				</div><!-- end tablet screen -->
			</div><!-- end tablet case -->
		</div><!-- end tablet -->
		<div class="phone">
			<div class="case">
				<div class="screen">
					<div class="maintain-ratio">
						<div class="filler">
							<div class="website">
								<div class="body">
									<header>
										<div class="title constraint-wrapper"></div>
									</header>
									<div class="main">
										<section>
											<div class="about constraint-wrapper"></div>
										</section>
										<section>
											<div class="information-nodes constraint-wrapper">
												<div class="node accent space-right"></div>
												<div class="node space-left"></div>
												<div class="node double"></div>
												<div class="node double accent"></div>
												<div class="node space-right"></div>
												<div class="node space-left"></div>
											</div>
										</section>
									</div>
								</div>
							</div><!-- end phone website -->
						</div><!-- end phone filler -->
					</div><!-- end phone maintain-ratio -->
				</div><!-- end phone screen -->
			</div><!-- end phone case -->
		</div><!-- end phone -->
	</div><!-- end showcase -->
	<div class="module">
		<div class="node">
			<h3>Front End</h3>
			<ul>
				<li>HTML5 / CSS3</li>
				<li>Responsive Design</li>
				<li>Mobile First</li>
				<li>Javascript / jQuery</li>
				<li>Ajax</li>
			</ul>
		</div><!--
		--><div class="node">
			<h3>Back End</h3>
			<ul>
				<li>PHP / MySQL</li>
				<li>C#.NET / MSSQL Server</li>
				<li>Database Relational Mapping</li>
				<li>Custom Software Development</li>
			</ul>
		</div><!--
		--><div class="node">
			<h3>Frameworks / Libraries</h3>
			<ul>
				<li>Laravel 4</li>
				<li>.NET Version 4.5</li>
				<li>.NET MVC 5</li>
				<li>EntityFramework 6</li>
				<li>jQuery / jQueryUI</li>
				<li>Underscore.js</li>
				<li>Modernizr</li>
			</ul>
		</div>
	</div>
	<!-- <footer>
		<div class="arrow-down js-scroll-next"></div>
	</footer> -->
</section>

@stop