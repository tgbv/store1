@extends('area51.global')
@section('title') Orders @endsection
@section('main')
	<div class="container">
		<div style="font-size: 25px;">Orders</div>
		<br>
		<table>
			<thead>
				<tr>
					<td>ID</td>
					<td>Date/Time</td>
					<td>Status</td>
					<td>Actions</td>
				</tr>
			</thead>
			<tbody>
				@foreach($ORDERS as $object)
					<tr>
						<td>{{ $object -> id }}</td>
						<td>{{ $object -> created_at}}</td>
						<td>{{ $object -> status }}</td>
						<td><a class="btn green text-white" href="/area51/order/{{ $object -> id }}">Manage</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection