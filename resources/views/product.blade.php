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
@endsection
@section('main')
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="__title __title_l hide-on-med-and-down">{{$PRODUCT -> title }}</div>
				<div class="__title __title_m hide-on-small-only hide-on-large-only">{{$PRODUCT -> title }}</div>
				<div class="__title __title_s hide-on-med-and-up">{{$PRODUCT -> title }}</div>

				<div class="flow-text __description">
					This picture is about me and my This picture is about me and my This picture is about me and my This picture is about me and my This picture is about me and my 
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