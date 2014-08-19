<!DOCTYPE>

<html>

    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/style.css">

    </head>

    <body>

		<header>

			<div class="background-image"></div>

			<div class="pattern-overlay sprites-overlayPattern pattern-overlay-color"></div>

			<div class="container" >

				<div class="row">

					<div class="col-md-6">

						<span class="logo">Way2adv</span>

						@include ('layouts.partials.navigation')

					</div>

					<div class="col-md-6">

						@include ('layouts.partials.search')

					</div>

				</div>

			</div>

		</header>

		<main class="container">

        	@yield('content')

		</main>

    </body>

</html>