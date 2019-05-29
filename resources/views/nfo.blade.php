@extends('global')

@section('title') Order information @endsection
@section('style')

	#nfo
	{
		margin-top: -5px;
	}

	.__nfo 
	{
		font-size: 25px;
		font-weight: 100;
		margin-bottom: 10px;
		margin-top: 32px;
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
		<div id="nfo"></div>
		<div class="row">
			<div class="col l12 m12 s12">
				<div class="__nfo">Delivery method</div>
				<div class="row">
					<div class="col">
						<label>
							<input class="checkbox" id="courier_delivery" name="delivery_type" type="radio" checked />
							<span>Courier delivery</span>
						</label>
					</div>
					<div class="col">
						<label>
							<input class="checkbox" id="pickup_delivery" name="delivery_type" type="radio"/>
							<span>Pick it up from Timisoara</span>
						</label>
					</div>
				</div>

				<!-- JS will swap between options -->
				<!-- first one is courier delivery -->
				<div class="__nfo">Delivery details</div>
				<div id="courier_form">
					<form method="POST" id="form" onsubmit="">
						{{csrf_field()}}
						<div class="row">
							<div class="input-field col s6">
							  <input name="first_name" value="{{ old('first_name') }}" id="first_name" type="text" class="validate">
							  <label class="active" for="first_name">First Name</label>
							</div>
							<div class="input-field col s6">
							  <input name="last_name" value="{{ old('last_name') }}" id="last_name" type="text" class="validate">
							  <label class="active" for="last_name">Last Name</label>
							</div>						
						</div>
						<div class="row">
							<div class="input-field col l4 m4 s12">
								<select name="country" id='select_countries'>
								  <option value="RO" selected>Romania</option>
								</select>
								<label>Country</label>
							</div>
							<div class="input-field col l4 m4 s12">
								<select name="county" id="select_counties">
									<option  value="default"  selected>Choose your region</option>
									@foreach($COUNTIES as $object)
								  		<option value="{{$object -> id}}" >{{ $object -> name }}</option>						
									@endforeach
								</select>
								<label>Region</label>
							</div>
							<div class="input-field col l4 m4 s12">
								<select name="city" id="select_cities">
								  <option value="default"  selected>Choose your city</option>
								</select>
								<label>City</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col l6 m6 s12">
							  <input value="{{ old('address') }}" name="address" id="address" type="text" class="validate">
							  <label class="active" for="address">Address</label>
							</div>
							<div class="input-field col l6 m6 s12">
							  <input value="{{ old('phone') }}" name="phone" id="phone" type="tel" class="validate">
							  <label class="active" for="phone">Phone number</label>
							</div>
						</div>
					</form>
					<div class="__nfo">Payment method</div>
					<div class="row">
						<div class="col">
							<label>
								<input class="checkbox" name="payment_method" type="radio" checked />
								<span>Courier payment</span>
							</label>
						</div>
					</div>

					<div class="btn waves-effect waves-light white-text" onclick="$('#form').submit()">Place Order</div>
				</div>

				<!-- second one is manual pickup -->
				<div class="row" id="pickup_nfo" hidden="">
					<div class="col">
						<div>Please <a href="#footer">contact me</a> so we can set up a meeting to perform the exchange. Contact methods you will find in website's footer.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('js')
// <script type="text/javascript">

	$(document).ready(function()
	{
		/*
		*	Checkbox listener
		*/
		$('.checkbox').change(function()
		{
			if($('#courier_delivery').is(':checked')) {
				$('#courier_form').removeAttr('hidden');
				$('#pickup_nfo').attr('hidden', 'hidden');
			}

			if($('#pickup_delivery').is(':checked')) {
				$('#courier_form').attr('hidden', 'hidden');
				$('#pickup_nfo').removeAttr('hidden');
			}
		});

		/*
		*	Select listeneer
		*/
		$('#select_counties').change(function() {
			$.ajax({
				url: '/ajax/cities/county_id:'+$('#select_counties option:selected').val(),
				success: (data) => 
				{
					/*
					*	Clear old html
					*/
					$('#select_cities').html('');

					/*
					*	Inject new html
					*/
					$('#select_cities').html('<option value="default"  selected>Choose your city</option>');

					var __length = Object.keys(data).length;
					for(i = 0; i < __length; i++)
						$('#select_cities').append('<option value="'+data[i].id+'">'+data[i].name+'</option>');

					/*
					*	Reinitialize selects
					*/
					$('select').formSelect();
				}
			});
		})

		/*
		*	Errors handling
		*/
		@if($errors -> any())
			@foreach($errors -> all() as $msg)
				M.toast({html: "{{ $msg }}"}, 10000);
			@endforeach
		@endif
	});

//</script>
@endsection