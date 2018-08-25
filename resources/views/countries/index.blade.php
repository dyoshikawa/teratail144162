@extends('layouts.app')

@section('content')

<h1>Countryページ</h1>

<table class="table">

	<tr>
		<th>国名</th>
	</tr>

	@foreach($countries as $country)
	<tr>
		<td><a href="{{ url('countries/'.$country->id)}}">{{$country->name}}</a></td>
	</tr>
	@endforeach

</table>

@endsection