@extends('layouts.app')

@section('content')

  <div class="container space-2 space-3-top--lg">
    <h1>{!! $country-> name!!}</h1>
    <p class="lead">Our duty towards you is to share our experience we're reaching in our work path with you.</p>
    <br>
    <br>
    <p>求人一覧</p>
  </div>



  @if(count($country->companies)>0)
      
    <?php
      $colcount = count($country->companies);
      $i = 1;
    ?>

      <div class="container">
        <div class="row text-center">
        @foreach($country->companies as $company )
        @if($i == $colcount)
          <div class="col-md-4">
            <div class="card mb-3 shadow-sm" style="width: 18rem;">
                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQyMGg1988pPi2NmtJ2zHBKx5ZMfvIzcaEotYBcpjJT4XNotYyBw" alt="Card image cap">

                <div class="card-body">
                  <a href="/companies/{{$company->id}}"></a>
                  <a href="{{ url('companies/'. $company->id)}}"><h5 class="card-title">{{$company->title}}</h5></a>
                  <p class="card-text">ここに description</p>
                </div>

                <ul class="list-group list-group-flush">
                  <li class="list-group-item">ここに勤務地</li>
                  <li class="list-group-item">ここに給料</li>
                  <li class="list-group-item">ここに勤務時間</li>
                  <li class="list-group-item">その他</li>
                </ul>
            </div>
          </div>
        @else
          <div class="col-md-4">
            <div class="card mb-3 shadow-sm" style="width: 18rem;">
              <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQyMGg1988pPi2NmtJ2zHBKx5ZMfvIzcaEotYBcpjJT4XNotYyBw" alt="Card image cap">

              <div class="card-body">
                <a href="/companies/{{$company->id}}"></a>
                <a href="{{ url('companies/'. $company->id)}}"><h5 class="card-title">{{$company->title}}</h5></a>
                <p class="card-text">ここに description</p>
              </div>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">ここに勤務地</li>
                <li class="list-group-item">ここに給料</li>
                <li class="list-group-item">ここに勤務時間</li>
                <li class="list-group-item">その他</li>
              </ul>
            </div>
        @endif

        @if($i % 3== 0)
          </div>  
        </div>
          <div class="row text-center">
        @else
          </div>
        @endif

          <?php $i++; ?>

        @endforeach
    </div>
  @else
    <p>!!!No Jobs To Display!!!</p>
  @endif
<br>
<a class="btn btn-success float-right" href="/countries" style="margin-right: 10%">Back</a>
<br>
@endsection