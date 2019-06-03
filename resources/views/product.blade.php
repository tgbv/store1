@extends('global')

@section('title') {{$PRODUCT -> title}} - Details @endsection
@section('style')
	img
	{
		border: 1px solid pink;
	}

	main .container
	{
		margin-top: 30px;
		margin-bottom: 30px;
	}

	.__title
	{
		font-size: 40px;
		font-weight: 100;
		margin-top: -10px;
	}

	.__title_l
	{
		font-size: 40px;
	}

	.__title_m
	{
		font-size: 35px;
	}

	.__title_s
	{
		font-size: 30px;
	}

	.__img
	{
		margin-left: 3.5px;
	}

	.__description
	{
		margin-top: 10px;
		font-weight: 100;
		margin-bottom: 20px;
	}

	.btn
	{
		margin-top: 20px;
		float: right;
		background-color: #ff0075;
	}

	.btn:hover
	{
		background-color: #ff0075;
	}

	.btn span
	{
		position: relative;
		top: -4px;
	}

	.__cover_text_desktop
	{
		font-size: 60px;
		font-weight: 100;
		color: white;
		margin-top: 15px;
	}

	.__cover_text_medium
	{
		font-size: 50px;
		font-weight: 100;
		color: white;
		margin-top: 15px;
	}

	.__cover_text_mobile
	{
		font-size: 40px;
		font-weight: 100;
		color: white;
		margin-top: 15px;
	}

	.__wall2 .__welcome {
		font-weight: 100;
		font-size: 60px;
		color: white;
		margin-top: 15px;
		position: relative;
		top: 40px;
	}

	.__wall2 .__welcome_med 
	{
		font-weight: 100;
		font-size: 54px;
		color: white;
		margin-top: 15px;
		position: relative;
		top: 45px;
	}

	.__wall2 .__welcome_small
	{
		font-weight: 100;
		font-size: 45px;
		color: white;
		margin-top: 15px;
		position: relative;
		top: 30px;
	}
@endsection
@section('cover')
	<div class="__welcome hide-on-med-and-down">
		<span hidden="" class="__w">I hope you like them :)</span>
	</div>
	<div class="__welcome_med hide-on-small-only hide-on-large-only">
		<span hidden="" class="__w">I hope you like them :)</span>
	</div>
	<div class="__welcome_small hide-on-med-and-up">
		<span hidden="" class="__w">I hope you like them :)</span>
	</div>
@endsection
@section('main')
	<div id="product"></div>
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="__title __title_l hide-on-med-and-down">
					{{$PRODUCT -> title }}
					— <span class="green-text text-darken-2">{{ $PRODUCT -> price}} RON</span> 
				</div>
				<div class="__title __title_m hide-on-small-only hide-on-large-only">
					{{$PRODUCT -> title }}
					— <span class="green-text text-darken-2">{{ $PRODUCT -> price}} RON</span> 
				</div>
				<div class="__title __title_s hide-on-med-and-up">
					{{$PRODUCT -> title }}
					— <span class="green-text text-darken-2">{{ $PRODUCT -> price}} RON</span> 
				</div>

				<div class="flow-text __description">
					{{ $PRODUCT -> description }}
				</div>

				<center>
					<a class="__img" href="/static/{{$PRODUCT -> fname}}" target="_blank">
						<img src="/static/{{$PRODUCT -> fname}}" class="responsive-img hoverable">
					</a>
				</center>

				<div class="hide-on-large-only" style="margin-top: -20px;"></div>

				<div class="btn waves-effect waves-light white-text" onclick="window.location='/cart/{{$PRODUCT -> id}}/add';">
					<i class="material-icons">add_shopping_cart</i>
					<span>Add to cart</span>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('js')
	$(document).ready(function(){
		$('.__w').fadeIn(1000);
		setTimeout(() => {
			$('.__w2').fadeIn(2000);
		}, 500);
	})
@endsection