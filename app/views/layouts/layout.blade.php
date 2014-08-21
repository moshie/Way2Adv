<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Way2adv &middot; {{ isset($pageTitle) ? $pageTitle : 'Home' }}</title>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="David Hewitt's portfolio and personal website">
		<meta name="keywords" content="HTML, CSS, Portfolio, Web, Frontend, Development, Photography, 3d, 3ds, max">
		<meta name="author" content="David Hewitt">

		<link href='http://fonts.googleapis.com/css?family=Raleway:900,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="/bower_components/FlexSlider/flexslider.css">
        <link rel="stylesheet" href="/css/style.css">

    </head>

    <body>

		<div id="main-wrapper">

			<div class="fixed-background-image bridge-image"></div>

			<div class="pattern-overlay pattern-overlay-color"></div>

			<header>

				<div class="container">

					<div class="row">

						<div class="col-md-6">

							<span class="logo pull-left">Way2adv</span>

							@include ('layouts.partials.navigation')

						</div>

						<div class="col-md-6">

							@include ('layouts.partials.search')

						</div>

					</div>

				</div>

			</header>

			@yield('heading')

		</div>

		@yield('content')


		<footer>

			<div class="container">

				<div class="row">

					<div class="col-md-6">

						<span class="logo">Way2adv</span>

					</div>

					<div class="col-md-6">

						<span class="copyright pull-right">Copyright &copy; 2013 - <?php echo date("Y"); ?> Code and Design by David Hewitt</span>

					</div>

				</div>

			</div>

		</footer>
		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<script src="bower_components/FlexSlider/jquery.flexslider-min.js"></script>
		<script src="scripts/jquery.stellar.js"></script>
		<script src="scripts/main.js"></script>
		@yield('scripts')
		<script>
			$.stellar();
		</script>

    </body>

</html>