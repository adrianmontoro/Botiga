<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>BotiShop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="{{route('shop')}}" class="logo"><h4><strong>BotiShop</strong></h4></a>
					<nav id="nav">
						<a href="{{route('shop')}}">Home</a>
						@guest
						<a href="{{route('register')}}">Register</a>
						<a href="{{route('login')}}">Login</a>
						@endguest
						<a href="{{route('feed')}}" class="fas fa-rss"> </a>
						<!-- Authentication Links -->
						@auth
							<a class="nav-link fas fa-shopping-cart" href="{{ route('cart_index') }}"></a>
						@endauth
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<div class="semi">
						<header>
							<h1>BotiShop</h1>
						</header>
					</div>

					<main class="py-4">
							@yield('content')
					</main>
				</div>
			</section>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
