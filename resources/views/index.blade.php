@extends('global')

@section('title') Joana Paintings - Welcome! @endsection
@section('head')
	<meta name="description" content="Buy pictures at low price. Order painted artistic operas. Track my artistic activity online. Get in touch with me. All in one place! :)"> 
	@if(count($PRODUCTS) > 0)
		<meta name="og:title" property="og:title" content="{{$PRODUCTS -> last() -> title}}"> 
	@endif
	<meta name="og:type" property="og:type" content="website"> 
	<meta name="og:description" property="og:description" content="Buy pictures at low price. Order painted artistic operas. Track my artistic activity online. Get in touch with me. All in one place! :)"> 
	@if(count($PRODUCTS) > 0)
		<meta name="og:image" property="og:image" content="https://{{ $_SERVER['SERVER_NAME'] }}/static/{{$PRODUCTS -> last() -> fname }}"> 
	@endif
	<meta name="robots" content="index, follow"> 
@endsection
@section('style')
	.__wall2 .__welcome {
		font-weight: 100;
		font-size: 60px;
		color: white;
		margin-top: 15px;
	}

	.__wall2 .__welcome_med 
	{
		font-weight: 100;
		font-size: 54px;
		color: white;
		margin-top: 15px;
	}

	.__wall2 .__welcome_small
	{
		font-weight: 100;
		font-size: 45px;
		color: white;
		margin-top: 15px;
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

	.modal-content a:hover
	{
		text-decoration: underline;
		color: red;
	}

	.modal-footer span
	{
		position: relative;
		top: -4.3px;
		left: -5px;
	}
@endsection

@section('main')
	<!-- giant cover -->
	@section('cover')
		<div class="__welcome hide-on-med-and-down">
			<span hidden="" class="__w">Hi!</span>
			<span hidden="" class="__w2">Check out my paintings!</span>
		</div>
		<div class="__welcome_med hide-on-small-only hide-on-large-only">
			<span hidden="" class="__w">Hi!</span>
			<span hidden="" class="__w2">Check out my paintings!</span>
		</div>
		<div class="__welcome_small hide-on-med-and-up">
			<span hidden="" class="__w">Hi!</span>
			<span hidden="" class="__w2">Check out my paintings!</span>
		</div>
	@endsection

	<div class="container">

		<!--- contact methods -->
	  <div id="contact_method" class="modal">
	    <div class="modal-content">
	      <h4 class="hide-on-small-only">Contact methods</h4>
	      <h5 class="hide-on-med-and-up">Contact methods</h5>
			<div class="flow-text">
		      <ul>
		      	<li>
		      		<i class="fa fa-whatsapp"></i>
		      		<a target="_blank" href="https://api.whatsapp.com/send?phone=40749929468">Whatsapp</a>
		      	</li>
		      	<li>
		      		<i class="fa fa-envelope"></i>
		      		<a href="mailto:contact@joanapaintingsforyou.ml" style="margin-left: 5px;">E-mail</a>
		      	</li>
		      </ul>
	      </div>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect waves-green btn-flat">
	      	<i class="material-icons">close</i>&nbsp;
	      	<span>Close</span>
	      </a>
	    </div>
	  </div>
	  	<!--- contact methods --->

		<!-- welcome -->
		<div class="row" style="margin-top: 40px;">
			<!-- about me -->
			<div id="about_me" name="about_me"></div>
			<div class="col l6 m6 s12">
				<!-- desktop -->
		        <div style="margin-right: 20px;" class="card-panel grey lighten-5 z-depth-1 hoverable hide-on-small-only">
		          <div class="row valign-wrapper">
		            <div class="col s12">
		            	<div style="font-size: 29px; font-weight: 100">About me</div>
		            	<br>
		            	<div style="font-size: 22px; font-weight: 100">
		            		Hi! I'm Ioana. 
		            		I recently discovered painting is my meditation, 
		            		it would mean a lot if you apreciated my work and wanted to have it ❤
		            		<br>
		            		<br>
		            		If you want to, I can also paint on order.
		            		<br>
		            		Simply <a class="modal-trigger" href="#contact_method">contact me</a> :)
		            	</div>
		            </div>
		          </div>
		        </div>
		        <!-- mobile -->
		     	<div class="card-panel grey lighten-5 z-depth-1 hoverable hide-on-med-and-up">
		          <div class="row valign-wrapper">
		            <div class="col s12">
		            	<div style="font-size: 29px; font-weight: 100">About me</div>
		            	<br>
		            	<div style="font-size: 22px; font-weight: 100">
		            		Hi! I'm Ioana. 
		            		I recently discovered painting is my meditation, 
		            		it would mean a lot if you apreciated my work and wanted to have it ❤
		            		<br>
		            		<br>
		            		If you want to, I can also paint on order.
		            		Simply <a class="modal-trigger" href="#contact_method">contact me</a>.
		            	</div>
		            </div>
		          </div>
		        </div>
			</div>


			<!-- contact -->
			<div class="col l6 m6 s12">
				<!-- desktop -->
		        <div style="margin-left: 20px;" class="card-panel grey lighten-5 z-depth-1 hoverable hide-on-small-only">
			        <div class="row">
			        	<div class="col">
			        		<div style="font-size: 29px; font-weight: 100; margin-bottom: 25px;">My latest painting</div>
							@if(count($PRODUCTS) > 0)
								<img alt="My last upload" style="max-height: 200px;" class="responsive-img materialboxed" src="/static/{{$PRODUCTS -> last() -> fname }}">
							@endif
						</div>
			        </div>
		    	</div>
		    	<!-- mobile -->
		        <div class="card-panel grey lighten-5 z-depth-1 hoverable hide-on-med-and-up">
			        <div class="row">
			        	<div class="col">
			        		<div style="font-size: 29px; font-weight: 100; margin-bottom: 25px;">My latest painting</div>
							@if(count($PRODUCTS) > 0) 
								<img alt="My last upload" style="max-height: 200px;" class="responsive-img materialboxed" src="/static/{{$PRODUCTS -> last() -> fname }}">
							@endif
			        	</div>
			        </div>
		    	</div>
			</div>
		</div>

		@if(count($PRODUCTS) > 0)
			<!-- products card-->
			<div id="my_work" name="my_work"></div>
			<div class="__mywork card-panel grey lighten-5 z-depth-1 hide-on-small-only">
				<div class="__my_work">My work</div>
				<div class="row">
					@foreach($PRODUCTS as $object)
					    <div class="col s12 m4 l4 ">
					      <div class="card hoverable">
					        <div class="card-image ">
					          <img alt="{{ $object->title }}" class="responsive-img materialboxed" src="/static/{{$object -> fname }}">
					        </div>
					        <div class="card-content">
					        	<span class="card-title">{{$object -> title}}</span>
					        </div>
					        <div class="card-action">
					        	<a class="blue-text waves-effect" href="/products/{{$object -> id}}#product">Details</a>
					        	<a class="red-text waves-effect" href="/cart/{{$object -> id}}/add">Add to cart</a>
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
					          <img alt="{{$object -> title}}" class="responsive-img materialboxed" src="/static/{{$object -> fname }}">
					        </div>
					        <div class="card-content">
					        	<span class="card-title">{{$object -> title}}</span>
					        </div>

					        <div class="card-action">
					        	<a class="blue-text waves-effect" href="/products/{{$object -> id}}#product">Details</a>
					        	<a class="red-text waves-effect" href="/cart/{{$object -> id}}/add">Add to cart</a>
					        </div>
					    	</div>
					    </div>
					@endforeach
				</div>
			</div>
		</div>
	@endif
@endsection
@section('js')
	$(document).ready(function(){
		/*
		*	Autoload stuff
		*/
		$('.modal').modal();

		/*
		*	Fadein
		*/
		$('.__w').fadeIn(1000);

		setTimeout(() => {
			$('.__w2').fadeIn(2000);
		}, 500);
	})
@endsection