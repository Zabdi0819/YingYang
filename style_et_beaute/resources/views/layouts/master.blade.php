<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<!-- Styles -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css" >
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-4">
					<img id="logo" src="images/logo2.png">
				</div>
				<div class="col-sm-9 col-md-6 col-lg-5">
					<h1 id="titulo">Style et Beauté</h1>
				</div>
				<div class="col-sm-3 col-md-6 col-lg-3">
					<a href="https://1www.instagram.com/styleetbeaute2021/?hl=es-la"><img class="social" src="images/Instagram.png"></a>
					<a href="https://www.facebook.com/Style-et-Beaut%C3%A9-102324065280517"><img class="social" src="images/Facebook.png"></a>
				</div>	
			</div>
		</div>
		<div class="menu">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="index">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="politicas">Políticas</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="qs">¿Quiénes somos?</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="registro">Registro</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>

	@yield('contenido')


	<footer>
		<div class="da">
			<div class="row">
				<div class="col-sm-3 col-md-6 col-lg-4">
					
				</div>	
				<div class="col-sm-9 col-md-6 col-lg-4">
					<h1 id="textf">Style et Beauté</h1>
					<p>Teléfono: 449 935 34 02 <br> 
						styleetbeaute2021@gmail.com</p>
						<a href="https://1www.instagram.com/styleetbeaute2021/?hl=es-la"><img class="socialF" src="images/Instagram.png"></a>
						<a href="https://www.facebook.com/Style-et-Beaut%C3%A9-102324065280517"><img class="socialF" src="images/Facebook.png"></a>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4">
					<img id="logoF" src="images/logo2.png">
				</div>
			</div>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>