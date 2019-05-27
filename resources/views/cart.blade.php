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
						</tr>
					</thead>
					<tbody>
						@foreach($OBJECTS as $array)
							<tr>
								<td>
									<span>{{ $array['title'] }}</span>
									<a href="/cart/{{ $array['id'] }}/remove">
										<span class="red chip waves-effect waves-light" title="Remove from cart">
												<i class="material-icons tiny" >close</i>
										</span>
									</a>
								</td>
								<td><code>1</code></td>
							</tr>
						@endforeach
					</tbody>
				</table>

				<div class="btn waves-effect waves-light white-text" onclick="window.location='/cart/nfo#nfo';">Next</div>
			</div>
		</div>
	</div>
@endsection