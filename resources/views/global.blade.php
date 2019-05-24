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

			header .__wall1 {
				height: 30px;
				background-color: #c5005a;
			}

			header .__wall2 {
				height: 300px;
				background-color: #ff0075; 
				text-align: center;
				padding: 12px;
			}

			header .__wall2 .__welcome {
				font-weight: 100;
				font-size: 60px;
				color: white;
			}

			.__facebook {
				width: 100%;
				background-color: #0b0b96b3;
				color: white;
				text-align: center;
				cursor: pointer;
				font-weight: 100;
				height: 30px;
				margin: 7px;
			}

			.__facebook span {
				top: 10%;
				position: relative;
			}

			.__mywork {
				margin: 11px;
				margin-right: 13px;
				margin-bottom: 55px;
			}

			.__mywork .btn-floating {
				background-color: #c5005a;
			}

			.__mywork_mobile .btn-floating {
				background-color: #c5005a;
			}

			.__mywork .__my_work 
			{
				font-weight: 100;
				font-size: 50px;
				margin-top: -10px;
				margin-left: 8px;
				margin-bottom: 20px;
			}

			.__mywork_mobile .__my_work {
				font-size: 40px;
				font-weight: 100;
				text-align: center;
			}

			.__contact 
			{
				text-align: center; 
				font-size: 50px;
				margin-top: 20px;
			}

			.__contact a
			{
				color: inherit !important;
				margin: 5px;
			}

			.__contact a:hover
			{
				color: grey !important;
			}

			.__contact a:active {
				color: grey !important;
			}

			@yield('style')
		</style>
		@yield('head')
	</head>
	<body>
		<header>
			<div class="__wall1"></div>
			<div class="__wall2 z-depth-2">
				<img src="">
				<div class="__welcome">Hi!</div>
				<div class="__welcome">Check out my paintings!</div>
			</div>
		</header>

		<main>
			<div class="container">

				<!-- two cards -->
				<div class="row hide-on-small-only" style="margin-top: 40px;">

					<!-- about me -->
					<div class="col l6 m6 s12">
				        <div style="margin-right: 20px;" class="card-panel grey lighten-5 z-depth-1 hoverable">
				          <div class="row valign-wrapper hide-on-med-and-down">
				            <div class="col s2">
				              <img style="top: -14px; position: relative;" src="/static/asdf.png" alt="" class="circle responsive-img">
				            </div>
				            <div class="col s10">
				            	<div style="font-size: 29px; font-weight: 100">About me</div>
				            	<br>
				            	<div style="font-size: 22px; font-weight: 100">I am the son of Caesar, the ancestor of ZaithsI am the son of Caesar, the ancestor of Zaiths</div>
				            </div>
				          </div>

					        <div class="row valign-wrapper hide-on-large-only">
					        	<div class="col s12 m12 l12">
					            	<div style="font-size: 29px; font-weight: 100">About me</div>
					            	<br>
					            	<div style="font-size: 22px; font-weight: 100">Lorem ipsum loLorem ipsum loLorem ipsum loLorem ipsum loLorem ipsum lo</div>
				            	</div>
					        </div>
				        </div>
					</div>

					<!-- contact -->
					<div class="col l6 m6 s12">
				        <div style="margin-left: 20px;" class="card-panel grey lighten-5 z-depth-1 hoverable">
				          <div class="row valign-wrapper">
				            <div class="col ">
								<div class="__facebook waves-effect waves-light">
									<span>Facebook</span>
								</div>
								<div class="__facebook waves-effect waves-light">
									<span>Twitter</span>
								</div>
								<div class="__facebook waves-effect waves-light">
									<span>Whatsapp</span>
								</div>
				            </div>
				            <div class="col">
				            	<div style="font-size: 29px; font-weight: 100">Contact me</div>
				            	<br>
				            	<div style="font-size: 22px; font-weight: 100">Feel free to drop me a PM :)</div>
				            </div>
				          </div>
				        </div>
					</div>
				</div>

				<div class="row hide-on-med-and-up">
					<div class="col s12">
				        <div style="margin-top: 40px;" class="card-panel grey lighten-5 z-depth-1 hoverable">
					        <div class="row valign-wrapper ">
					        	<div class="col s12">
					            	<div style="font-size: 29px; font-weight: 100">About me</div>
					            	<br>
					            	<div style="font-size: 22px; font-weight: 100">Lorem ipsum loLorem ipsum loLorem ipsum loLorem ipsum loLorem ipsum lo</div>
				            	</div>
					        </div>
				        </div>
					</div>

					<div class="col s12">
				        <div class="card-panel grey lighten-5 z-depth-1 hoverable">
				          <div class="row valign-wrapper">
				            <div class="col s12">
				            	<div style="font-size: 29px; font-weight: 100">Contact me</div>
				            	<br>
				            	<div style="font-size: 22px; font-weight: 100">Feel free to drop me a PM :)</div>

				            	<!-- contact section -->
				            	<div class="__contact">
					            	<a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
								</div>	            	
				            </div>
				          </div>
				        </div>
					</div>
				</div>

				<!-- products card-->
				<div class="__mywork card-panel grey lighten-5 z-depth-1 hide-on-small-only">
					<div class="__my_work">My work</div>
					<div class="row">
						@foreach($PRODUCTS as $object)
						    <div class="col s12 m4 l4 ">
						      <div class="card hoverable">
						        <div class="card-image ">
						          <img class="responsive-img materialboxed" src="/static/{{$object -> fname }}">
						          <a class="btn-floating halfway-fab waves-effect waves-light" title="Add this product to your cart">
						          	<i class="material-icons">add_shopping_cart</i>
						          </a>
						        </div>
						        <div class="card-content">
						        	<span class="card-title">{{$object -> title}}</span>
						        	({{ $object -> price }})
						        </div>
						      </div>
						    </div>
						@endforeach
					</div>
				</div>

				<div class="__mywork_mobile hide-on-med-and-up">
					<div class="row">
						<div class="__my_work">My work</div>
						@foreach($PRODUCTS as $object)
						    <div class="col s12 m4 l4 ">
						      <div class="card hoverable">
						        <div class="card-image ">
						          <img class="responsive-img materialboxed" src="/static/{{$object -> fname }}">
						          <a class="btn-floating halfway-fab waves-effect waves-light" title="Add this product to your cart">
						          	<i class="material-icons">add_shopping_cart</i>
						          </a>
						        </div>
						        <div class="card-content">
						        	<span class="card-title">{{$object -> title}}</span>
						        	({{ $object -> price }})
						        </div>
						      </div>
						    </div>
						@endforeach
					</div>
				</div>
		</main>

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
			})
		</script>
	</body>
</html>