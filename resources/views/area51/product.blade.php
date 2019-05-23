<!DOCTYPE html>
<html>
	<head>
		<title>Edit product</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	</head>
	<body>
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
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.collapsible').collapsible();

				@if(!empty($MESSAGE))
					M.Toast($MESSAGE);
				@endif
			});
		</script>
	</body>
</html>