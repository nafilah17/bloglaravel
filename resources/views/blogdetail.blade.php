<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Post</title>

  <!-- Bootstrap core CSS -->
  <link type="text/css" href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link type="text/css" href="/assets/css/blog-home.css" rel="stylesheet">

</head>

<body>

 <!-- nav here -->
 @include('header')

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">
      @foreach($artikel as $a)
        <!-- Title -->
        <h1 class="mt-4">{{ $a->title }}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">{{ $a->author }}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>{{ $a->updated_at }}</p>

        <hr>

        <!-- Preview Image -->
        <!-- <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""> -->

        <hr>

        <!-- Post Content -->
        <p class="lead">{{ $a->content }}</p>

       

        <hr>
      @endforeach

      </div>

     <div class="col-md-4">

       <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              @foreach ($artikel as $a)
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">{{ $a->category }}</a>
                  </li>
                  
                </ul>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

 <!-- FOOTER -->
 @include('footer')

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="/assets/vendor/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
