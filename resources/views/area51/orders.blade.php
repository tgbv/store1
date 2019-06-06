<?php
	
	use \Carbon\Carbon;

	//date_default_timezone_set("UTC");

?>
@extends('area51.global')
@section('title') Orders @endsection
@section('main')
	<div class="container">
		<div style="font-size: 25px; margin-top: 20px;">Orders</div>
		<br>
		<table>
			<thead>
				<tr>
					<td><b>ID</b></td>
					<td><b>Date/Time</b></td>
					<td><b>Status</b></td>
					<td><b>Actions</b></td>
				</tr>
			</thead>
			<tbody>
				@foreach($ORDERS as $object)
					<tr>
						<td><code>{{ $object -> id }}</code></td>
						<td><code>{{ $object -> created_at}} (<?= Carbon::createFromTimeStamp(strtotime($object -> created_at))->diffForHumans() ?>)</code></td>
						<td>
							@if($object -> status === 'pending')
								<b style="color: red;">{{ $object -> status }}</b>
							@else
								<b style="color: green;">{{ $object -> status }}</b>
							@endif	
						</td>							
						<td><a class="btn green text-white waves-effect waves-light" href="/area51/order/{{ $object -> id }}">Manage</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<br>
		<a class="btn blue waves-effect waves-light" href="/area51">Go back</a>
		<br><br>
	</div>
@endsection