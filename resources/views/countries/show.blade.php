@extends('layouts.app')

@section('content')

  <div class="container space-2 space-3-top--lg">
    <h1>{!! $country-> name!!}</h1>
    <p class="lead">Our duty towards you is to share our experience we're reaching in our work path with you.</p>
    <br>
    <br>
    <p>求人一覧</p>
  </div>


  <div class="container space-3-bottom--lg">
      <div class="row">
        <div class="col-lg-9 order-lg-2 mb-9 mb-lg-0">
          <div class="card-mb card-sm-columns card-sm-2-count">
            <!-- Blog Grid -->
            <article class="card mb-3">
              <img class="card-img-top" src="../../assets/img/500x250/img11.jpg" alt="Image Description">
              <div class="card-body p-5">
                <small class="d-block text-muted mb-2">April 3, 2018</small>
                <h3 class="h5">
                  <a href="single-article-classic.html">Respect always comes first</a>
                </h3>
                <p>The past years have been remarkable for web technologies.</p>
              </div>
              <div class="card-footer bg-gray-100 py-4 px-5">
                <div class="media">
                  <img class="u-sm-avatar rounded-circle mr-3" src="../../assets/img/100x100/img1.jpg" alt="Image Description">
                  <div class="media-body">
                    <h4 class="d-inline-block mb-0">
                      <a class="d-block font-size-13" href="single-article-classic.html">Andrea Gard</a>
                    </h4>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
       </div>
      </div>





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