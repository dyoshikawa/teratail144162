<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>Africa Works</title>

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>

<body>

  <header>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container d-flex justify-content-between">
        <a href="/countries" class="navbar-brand d-flex align-items-center">
        <strong>Africa Works</strong>
        </a>
      </div>
    </div>
  </header>


  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
      <br>
      <br>
      <br>
        <h1 class="jumbotron-heading">Africa Works</h1>
      <br>
        <p class="lead text-muted">Let's go to Africa for discovering</p>
        <p>
      <br>
      <br>
        <a href="/login" class="btn btn-primary my-2">Login</a>
        <a href="/register" class="btn btn-secondary my-2">Register</a>
        </p>
      <br>
      </div>
    </section>

    @if(count($countries) > 0)
      <?php
        $colcount = count($countries);
        $i = 1;
      ?>

      
        <div class="container">
          <div class="row text-center">
          @foreach($countries as $country)
          @if($i == $colcount)
            <div class="col-md-4">
              <div class="card mb-3">
                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQyMGg1988pPi2NmtJ2zHBKx5ZMfvIzcaEotYBcpjJT4XNotYyBw" alt="Card image cap">

                <a href="{{ url('countries/'.$country->id)}}">
                <br>
                <h4>{{$country->name}}</h4>
                </a>
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
              </div>
            </div>
          @else
            <div class="col-md-4">
              <div class="card mb-3">
                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQyMGg1988pPi2NmtJ2zHBKx5ZMfvIzcaEotYBcpjJT4XNotYyBw" alt="Card image cap">

                <a href="{{ url('countries/'.$country->id)}}">
                <a href="/countries/{{$country->id}}">
                <br>
                <h4>{{$country->name}}</h4>
                </a>
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
              </div>
          @endif
          
          @if($i % 3 == 0)
            </div>
          </div>
            <div class="row text-center">
          @else
            </div>
          @endif

            <?php $i++; ?>

          @endforeach
        </div>
    @endif

  </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Africa Works created by @chihiro</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"></script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>