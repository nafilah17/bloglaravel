<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home</title>

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

      <!-- Blog Entries Column -->
      <div class="col-md-8">
      
        <h1 class="my-4">Back To Herbal</h1>
          <h5><small>Sometimes The Best Medicine is Grows from Weeds</small></h5>

        <!-- Blog Post -->
        <div class="card mb-4">
          @foreach ($artikel as $a)
          <!-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
          <div class="card-body">
            <h2 class="card-title">{{ $a->title }}</h2>
            <p class="card-text">{{substr( $a->content,0,150) }}...</p>
            <a href="/blog/detail/{{ $a->id }}" class="btn btn-primary">Read More &rarr;</a>
          </div>

          <div class="card-footer text-muted">
            {{ $a->created_at }}
            <a href="#">{{$a->author}}</a>
          </div>
           @endforeach

        </div>
      <br/>

        <!-- Pagination -->
        <!-- <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul> -->

      </div>

      <!-- SIDEBAR HERE -->
      <!-- Sidebar Widgets Column -->
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
