<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">		
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<style type="text/css">
			body {
				display: flex;
				min-height: 100vh;
				flex-direction: column;
			}

			main {
				flex: 1 0 auto;
			}

			.__wall1 {
				height: 30px;
				background-color: #c5005a;
			}

			.__wall1 .__menu
			{
				position: relative;
				padding: 2.45px;
			}

			.__wall1 a 
			{
				color: white;
			}

			.__wall1 a:hover 
			{
				color: lightgrey;
			}

			@yield('style')
		</style>
		@yield('head')
	</head>
	<body>
		<header>
			<!-- global header -->
			<div class="__wall1">
				<div class="container">
					<div class="__menu">
						<a href="#!" data-target="__sidenav" class="sidenav-trigger" style="float: left; display: inline;"><i class="material-icons">menu</i></a>
						<a href="/cart" style="float: right; display: inline;"><i class="material-icons">shopping_cart</i></a>
					</div>
				</div>
			</div>

			<!-- global sidenav -->
			<ul id="__sidenav" class="sidenav"> 
				<li>
					<a href="/">
						<i class="material-icons">home</i>
						&nbsp;Homepage
					</a>
				</li>
				<li>
					<a href="/cart">
					<i class="material-icons">shopping_cart</i>
						&nbsp;Cart
					</a>
				</li>

				<div class="divider"></div>
				<li>
					<a href="#!" onclick="M.Sidenav.getInstance($('#__sidenav')).close();">
						<i class="material-icons">keyboard_backspace</i>
						&nbsp;Back
					</a>
				</li>
			</ul>
		</header>

		<main>@yield('main')</main>

		<footer class="page-footer z-depth-2" style="background-color: #ff0075 !important; ">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Footer Content</h5>
						<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text">Links</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright" style="background-color: #c5005a !important;">
				<div class="container">
					© 2019 - All rights reserved
					<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
				</div>
			</div>
		</footer>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.materialboxed').materialbox();
				$('.sidenav').sidenav();
			})
		</script>
	</body>
</html>