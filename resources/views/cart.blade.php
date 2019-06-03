@extends('global')

@section('title') Cart @endsection
@section('style')

	.__content {
		margin-top: 20px;
	}

	.__content .__cart {
		font-size: 40px;
		font-weight: 100;
	}

	.__content .__cartnfo
	{
		font-size: 25px;
		font-weight: 100;
		margin-top: 15px;
		margin-bottom: 15px;
	}

	.__content table {
		width: 100%;
	}

	.__content table i {
		color: white;
		position: relative;
		top: -1px;
		right: 7.5px !important;
	}

	.__content table .chip {
		width: 10px;
		height: 25px;
	}

	.btn
	{
		margin-top: 20px;
		margin-bottom: 17px;
		float: right;
		background-color: #ff0075;
	}

	.btn:hover
	{
		background-color: #ff0075;
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
		top: 40px;
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
		<span hidden="" class="__w">Thanks for buying out :)</span>
	</div>
	<div class="__welcome_med hide-on-small-only hide-on-large-only">
		<span hidden="" class="__w">Thanks for buying out :)</span>
	</div>
	<div class="__welcome_small hide-on-med-and-up">
		<span hidden="" class="__w">Thanks for buying out :)</span>
	</div>
@endsection
@section('main')
	<div class="container">
		<div id="cart"></div>
		<div class="row __content">
			<div class="col l12 m12 s12">
				<div class="__cart">Cart</div>
				<div class="__cartnfo">
					Please make sure these are the requested products.
				</div>
				<table class="highlight">
					<thead>
						<tr>
							<td><b>Product</b></td>
							<td><b>Quantity</b></td>
							<td><b>Price</b></td>
						</tr>
					</thead>
					<tbody>
						@php $price = 0; @endphp
						@foreach($OBJECTS as $array)
							<tr>
								<td>
									<a href="/cart/{{ $array['id'] }}/remove">
										<span class="red chip waves-effect waves-light" title="Remove from cart">
											<i class="material-icons tiny" >close</i>
										</span>
									</a>
									<span>{{ $array['title'] }}</span>
								</td>
								<td><code>1</code></td>
								<td><code>{{ $array['price'] }} RON</code></td>
							</tr>
							@php $price += $array['price'] @endphp
						@endforeach
						<tr>
							<td>
								<span class="green chip">
									<i class="material-icons tiny">checked</i>
								</span>
								<span style="position: relative; top: -3px;">Final price</span>
							</td>
							<td></td>
							<td><b>{{ $price }} RON</b></td>
						</tr>
					</tbody>
				</table>
				<div class="btn waves-effect waves-light white-text" onclick="window.location='/cart/nfo#nfo';">Next</div>
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