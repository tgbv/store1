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

@endsection
@section('main')
	<div class="container">
		<div name="cart"></div>
		<div class="row __content">
			<div class="col">
				<div class="__cart">Cart</div>
				<table class="responsive-table highlight">
					<thead>
						<tr>
							<td>Product</td>
							<td>Quantity</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Product 1</td>
							<td><code>1</code></td>
						</tr>
						<tr>
							<td>Product 2</td>
							<td><code>2</code></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection