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
					<span>Price:&nbsp;</span>
					<input type="text" name="price" required="" value="{{$PRODUCT -> price}}">
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