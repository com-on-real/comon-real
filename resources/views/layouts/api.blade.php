<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<script src="https://kit.fontawesome.com/e5ba52c6a0.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
	
	<title>@yield('title')</title>
</head>

<body>

		<header>
			<span class="header">
				<h1>Com'On Réal</h1>
				<h2>Communication sur internet</h2>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-facebook-square"></i>
				<i class="fas fa-envelope"></i>

			{{-- LOGO --}}
				<div id="profile">
					<img src="img/logo.png" alt="Florian BROTTE" class="rounded-circle img-profile">
					<!-- <h3>Florian BROTTE</h3> -->
				</div>
			</span>
		</header>

        @section('sidebar')

		@show
	

	<div id="content">
		@yield('content')
	</div>
	<footer>
		<div class="row">
			<div class="col-md-4">Com'On Réal</div>
			<div class="col-md-4"></div>
			<div class="col-md-4"><a href="">Mention Légale</a></div>
		</div>
	</footer>
	<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
</body>

</html>