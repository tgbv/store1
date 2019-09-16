@extends('area51.global')
@section('title') Edit product @endsection
@section('main')
		<div class="container">
			<form method="POST">
				{{ csrf_field() }}
				{{ method_field('patch') }}
				<div>
					<span>Title:&nbsp;</span>
					<input type="text" name="title" required="" value="{{$PRODUCT -> title}}">
				</div>
				<div>
					<span>Price (RON):&nbsp;</span>
					<input type="text" name="price" required="" value="{{$PRODUCT -> price}}">
				</div>
				<div>
					<span>Status (free/bought):&nbsp;</span>
					<input type="text" name="status" required="" value="{{$PRODUCT -> status}}">
				</div>
				<br>
				<div>
					<span>Description:&nbsp;</span>
					<textarea name="description">{{ $PRODUCT -> description }}</textarea>
				</div>
				<br>
				<button class="btn green waves-effect">Edit!</button>
				<div class="btn red waves-effect" onclick="window.location = '/area51';">Go back</div>
			</form>
		</div>
@endsection
@section('js')
			$(document).ready(function(){
				$('.collapsible').collapsible();
			});
@endsection
	</body>
</html>