<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<!-- Styles -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" >
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-4">
					<img id="logo" src="imagenes/logo2.png">
				</div>
				<div class="col-sm-9 col-md-6 col-lg-5">
					<h1 id="titulo">Style et Beauté</h1>
				</div>
				<div class="col-sm-3 col-md-6 col-lg-3">
					<a href="https://1www.instagram.com/styleetbeaute2021/?hl=es-la"><img class="social" src="imagenes/Instagram.png"></a>
					<a href="https://www.facebook.com/Style-et-Beaut%C3%A9-102324065280517"><img class="social" src="imagenes/Facebook.png"></a>
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
								<a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="prendas.html">Prendas</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="maquillaje.html">Maquillaje</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="qs.html">¿Quiénes somos?</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>

	@yield('contenido')

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>