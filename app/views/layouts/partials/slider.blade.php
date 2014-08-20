<div class="flexslider">

	<ul class="slides">
		<li>
			<div class="container">

				<div class="quote">

					<h1>Opportunity </h1>
					<h2>is missed by most people because it is</h2>
					<h3>dressed in overalls and looks like work.</h3>
					<br />
					<br />
					<h5>Thomas A. Edison</h5>

				</div>

			</div>
		</li>
		<li>
			<div class="container">

				<div class="quote">

					<h1>I love deadlines.</h1>
					<span class="h3">I love the</span> <span class="h2">Whooshing noise</span>
					<h3>they make as they go by.</h3>
					<br />
					<br />
					<h5>Douglas Adams</h5>

				</div>

			</div>
		</li>
		<li>
			<div class="container">

				<div class="quote">

					<h1>The supreme</h1>
					<span class="h2">accomplishment is to blur the line</span>
					<h3>between work and play.</h3>
					<br />
					<br />
					<h5>Arnold J. Toynbee</h5>

				</div>

			</div>
		</li>
	</ul>

</div>


@section('scripts')
	<script>
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				directionNav: false
			});
		});
	</script>
@stop
