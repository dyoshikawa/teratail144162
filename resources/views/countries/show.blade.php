@extends('layouts.app')

@section('content')

<h1>{!! $country-> name!!}</h1>

<p>求人一覧</p>



@if(count($country->companies)>0)
    <?php
      $colcount = count($country->companies);
      $i = 1;
    ?>
    <div id="photos">
      <div>
        @foreach($country->companies as $company )
          @if($i == $colcount)
             


             <div>
               <a href="/companies/{{$company->id}}">
                </a>
               <a href="{{ url('companies/'. $company->id)}}"><h2>{{$company->title}}</h2></a>
               <h4>{!! $company->description !!}</h4>



          @else
            <div>
               <a href="/companies/{{$company->id}}">
                </a>
               <a href="{{ url('companies/'. $company->id)}}"><h2>{{$company->title}}</h2></a>
               <h4>{!! $company->description !!}</h4>

               <hr class="bg-dark">

          @endif
          
          @if($i % 1== 0)
          </div></div>

          <div>
          @else
            </div>
          @endif
          <?php $i++; ?>
        @endforeach
      </div>
    </div>
  @else
    <p>!!!No Photos To Display!!!</p>
  @endif

<a href="/countries" class="btn btn-success">Back</a>

@endsection