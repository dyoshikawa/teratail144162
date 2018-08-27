@extends('layouts.app')

@section('content')

<h1> {{$company->title}}  </h1>
<p>{{$company->description}}</p>
<br>
<br>

{!! Form::open(['url'=>'/companies/{{$company->id}}', 'method'=>'POST']) !!}


<!--{{Form::submit('apply',['class'=>'btn btn-danger'])}}-->

{!! Form::close() !!}




<a href="/countries/{{$company->country_id}}" class="btn btn-success">Back</a>


@endsection

