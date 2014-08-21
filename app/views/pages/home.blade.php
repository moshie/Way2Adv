@extends('layouts.layout')

	@section('heading')

		@include ('layouts.partials.slider')

		<a href="#" class="sprites-scrollDown" id="scroll-down">Scroll Down</a>

		<div id="profile-bar" class="module">

			<div class="container">

				<a href="download/wallpapers/motorway.zip" class="download-wallpaper">

					<span class="tooltip">Download!</span>

					<span class="sprites-cloudDL">
						Download wallpaper.
					</span>

				</a>

				<div class="row">

					<div class="col-md-6">

						<div class="row">

							<div class="col-md-4">

								<a href="http://cv.way2adv.com/" target="_blank" class="hover-img">
									<?php include("images/svg/link.svg"); ?>
									{{ HTML::image('images/me.jpg', 'David Hewitt', array('width' => '110', 'height' => '110')); }}
								</a>

							</div>

							<div class="col-md-8">

								<h6>David Hewitt</h6>

								<p>
									Hey, I am a professonal front end web developer.
									I make all sorts of awesome things.
									don’t believe me? well thats too bad.
								</p>

							</div>

						</div>

					</div>

					<div class="col-md-6">

						<ul id="social-links" class="pull-right">
							<!--<li class="cv"><a href="#"><?php include("images/svg/cv.svg"); ?></a></li>-->
							<li class="facebook"><a href="https://www.facebook.com/RAWRHewitt" target="_blank"><?php include("images/svg/facebook.svg"); ?></a></li>
							<li class="twitter"><a href="https://twitter.com/Mosh1e" target="_blank"><?php include("images/svg/twitter.svg"); ?></a></li>
							<li class="linkdin"><a href="http://lnkd.in/d9gXEut" target="_blank"><?php include("images/svg/linkdin.svg"); ?></a></li>
						</ul>

					</div>

				</div>

			</div>

		</div>

	@stop

	@section('content')

		<div id="services" class="module">

			<div class="container">

				<div class="row">

					<div id="web-design-service" class="col-md-4">

						<div class="text-center">
							<ul id="devices" class="clearfix">
								<li><?php include("images/svg/mobile.svg"); ?></li>
								<li><?php include("images/svg/ipad.svg"); ?></li>
								<li><?php include("images/svg/laptop.svg"); ?></li>
							</ul>
						</div>

						<h4 class="text-center">Web design</h4>

						<p class="text-center">
							See all of my web design projects in all their
							glory. hope you can prepare your self for the
							awesomeness! if not good luck with the rest of
							this site.
						</p>

						<div class="text-center">
							<a href="#" class="btn btn-primary">More</a>
						</div>

					</div>

					<div id="photography-service" class="col-md-4">

						<div class="text-center">
							<?php include("images/svg/camera.svg"); ?>
						</div>

						<h4 class="text-center">Photography</h4>

						<p class="text-center">
							Pretty pictures? Thats right pretty pictures. You
							will love every single one, I garuntee it! All taken
							in pure HD quality for your viewing pleasure.
						</p>

						<div class="text-center">
							<a href="#" class="btn btn-primary">More</a>
						</div>

					</div>

					<div id="assets-service" class="col-md-4">

						<div class="cube-wrap text-center">
							<div class="cubespinner">
								<div class="face1"></div>
								<div class="face2"></div>
								<div class="face3"></div>
								<div class="face4"></div>
								<div class="face5"></div>
								<div class="face6"></div>
							</div>
						</div>

						<h4 class="text-center">3d assets</h4>

						<p class="text-center">
							What’s a 3d Asset I hear you ask they are primarily
							for film and games. Before I became a front end dev
							i used to make mods for games. Pretty cool right!
						</p>

						<div class="text-center">
							<a href="#" class="btn btn-primary">More</a>
						</div>

					</div>

				</div>

			</div>

		</div>

		<div id="twitter-feed" data-stellar-background-ratio="0.5" class="module">

			<div class="container">

				<a href="download/wallpapers/bridge.zip" class="download-wallpaper">

					<span class="tooltip">Download!</span>

					<span class="sprites-cloudDL">
						Download wallpaper.
					</span>

				</a>

				<span class="twitter-icon">
					<?php include("images/svg/twitter.svg"); ?>
				</span>

				<div class="text-center twitter-text">
					<span class="light"><span class="person">@Moshie</span> Dude you make the craziest <span class="hashtag">#Websites</span> ever!</span>
					<span class="light time">2 hours ago</span>
				</div>

			</div>

		</div>

		<div id="contact-details" class="module">

			<div class="container">

				<div class="row">

					<div class="col-md-6">

						<h4>Drop me a message</h4>

						@include ('layouts.partials.contactForm')

					</div>

					<div class="col-md-6">

						<h4>Contact info</h4>

						<div class="white-box">

							<dl>
								<dt>E-mail:</dt>
								<dd><a href="mailto:hewitt.20@gmail.com" target="_blank">hewitt.20@gmail.com</a></dd>

								<dt><abbr title="Curriculum vitae">CV</abbr>:</dt>
								<dd><a href="http://cv.way2adv.com/" title="My Curriculum vitae" target="_blank">http://cv.way2adv.com</a></dd>

								<dt>Skype:</dt>
								<dd>Moshiezz</dd>

								<dt>Linkedin:</dt>
								<dd><a href="#" target="_blank">David Hewitt</a></dd>
							</dl>

						</div>

						<div id="spotify" class="white-box clearfix">

							<ul class="unstyled-list">

								<?php
									$xml = 'http://ws.audioscrobbler.com/2.0/user/moshiezzzzz/recenttracks.xml';
									$xh = simplexml_load_file( $xml );

									foreach( $xh->track as $track ) :

									$img = $track->image[1];

									if( $track->image == '' )
									$img = 'images/no_music.jpg';

									echo '<li>';
									echo '<img style="float:left; margin-right:20px;" width="64" height="64" src=" ' . $img . '" alt=" ' . $track->name . '"/>';
									echo '<p>' . $track->name . '<br/><a href=" ' . $track->url . ' " target="_blank"> ' . $track->artist . '</a></p>';
									echo '</li>';

									break;

									endforeach;

								?>

							</ul>

						</div>

					</div>

				</div>

			</div>

		</div>

	@stop
