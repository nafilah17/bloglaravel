<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

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

        <h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <!-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
          <div class="card-body">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="/blog/detail" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>
      

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- SIDEBAR HERE -->
      @include('sidebar')

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
