<?php
	
	use \Carbon\Carbon;

	date_default_timezone_set("Asia/Bishkek");

?>
@extends('area51.global')
@section('title') Order Management @endsection
@section('css')
	code
	{
		color: #ff00c6;
		background-color: #ececec;
		font-weight: 600;
	}

	input
	{
		color: white;
		cursor: pointer;
	}

	a
	{
		color: blue;
	}

	a:hover
	{
		text-decoration: underline;
	}
@endsection
@section('main')
	<div class="container">
		<div style="font-size: 25px; margin-top: 20px;">Order details</div>
		<table class="">
			<tbody>
				<tr>
					<td>ID: </td>
					<td><code>{{$ORDER -> id}}</code></td>
				</tr>
				<tr>
					<td>Status: </td>
					<td>
						@if($ORDER -> status === 'pending')
							<b style="color: red">{{ $ORDER -> status }}</b></td>
						@else
							<b style="color: green">{{ $ORDER -> status }}</b></td>
						@endif						
				</tr>
				<tr>
					<td>Created at: </td>
					<td><code>{{ $ORDER -> created_at }}</code><code style="background-color: white; color: black;"> (<?= Carbon::createFromTimeStamp(strtotime($ORDER -> created_at)) -> diffForHumans() ?>)</code></td>
				</tr>
				<tr>
					<td>First Name: </td>
					<td><code>{{$ORDER -> first_name}}</code></td>
				</tr>
				<tr>
					<td>Last Name: </td>
					<td><code>{{$ORDER -> last_name }}</code></td>
				</tr>
				<tr>
					<td>Country: </td>
					<td><code>{{$ORDER -> country }}</code></td>
				</tr>
				<tr>
					<td>County: </td>
					<td><code>{{$ORDER -> County -> name}}</code></td>
				</tr>
				<tr>
					<td>City: </td>
					<td><code>{{ $ORDER -> City -> name }}</code></td>
				</tr>
				<tr>
					<td>Address: </td>
					<td><code>{{ $ORDER -> address }}</code></td>
				</tr>
				<tr>
					<td>Phone: </td>
					<td><code>{{ $ORDER -> phone }}</code></td>
				</tr>
				<tr>
					<td>Products: </td>
					<td><code>{!! $ORDER -> products !!}</code></td>
				</tr>
			</tbody>
		</table>
		<br>
		<form method="POST" action="/area51/order/{{ $ORDER -> id }}">
			{{ csrf_field() }}
			{{ method_field('patch') }}

			@if($ORDER -> status === 'pending')
				<button class="btn green darken-1 waves-effect waves-light">Mark as processed!</button>
			@else
				<button class="btn red darken-1 waves-effect waves-light">Mark as pending!</button>
			@endif				
			<a class="btn blue waves-effect waves-light" href="/area51/orders/all">Go back</a>
		</form>
		<br>
		<br>
	</div>
@endsection