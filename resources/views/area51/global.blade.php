<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<style type="text/css">@yield('css')</style>
		@yield('head')
	</head>
	<body>
		<header>
		  <nav>
		    <div class="nav-wrapper">
		      <a href="/" class="brand-logo">Homepage</a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="logout">Logout</a></li>
		      </ul>
		    </div>
		  </nav>
		</header>
		<main>	
			@yield('main')
		</main>
		<footer></footer>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>		
		<script type="text/javascript">
			$(document).ready(() => {
				@if(!empty($MESSAGE))
					M.Toast($MESSAGE);
				@endif				
			});
		</script>
		<script type="text/javascript">@yield('js')</script>
	</body>
</html>