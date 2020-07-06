<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin | Blog</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" type="text/css" href="/assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="/assets/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

   <!-- tiny -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script type="text/javascript" src="/assets/admin/tiny/js/tinymce/tinymce.min.js"></script>

<style>
  form {
    width:800px;
  }
</style>

<script>
  tinymce.init({
    selector: '.textEditor',
    plugins: 'link lists image advlist fullscreen media code table emoticons textcolor codesample hr preview',
    menubar: false,
    toolbar: [
      'undo redo | bold italic underline strikethrough forecolor backcolor bullist numlist | blockquote subscript superscript | alignleft aligncenter alignright alignjustify | image media link',
      ' formatselect | cut copy paste selectall | table emoticons hr | removeformat | preview code | fullscreen',
    ],
  });
</script>

  <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>


</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

<!--NAVBAR HERE -->
@include('admin/header')
  <!-- end -->

<!-- SIDEBAR HERE -->
@include('admin/sidebar')
  <!-- end -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Artikel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Artikel</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <!-- Main content -->
     <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Artikel</h5>
              </div>
              <div class="card-body">
              <a href="/artikel/add"> + Add Article </a>
                <!-- tabel artikel here -->
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Author</th>
                          <th>Category</th>
                          <th>Title</th>
                          <th>Content</th>
                          <th>Created_at</th>
                          <th>Update_at</th>
                          <th>Option</th>
                        </tr>
                      </thead>
                      <tbody>
                     @foreach ($a_articles as $a)
                        <tr>
                          <td>{{ $a->id }}</td>
                          <td>{{ $a->author }}</td>
                          <td>{{ $a->a_categories->name }}</td>
                          <td>{{ $a->title }}</td>
                          <td>{{substr( $a->content,0,150) }}</td>
                          <td>{{ $a->created_at }}</td>
                          <td>{{ $a->updated_at }}</td>
                          <td>
                            <a href="/a_articles/edit/{{ $a->id }}">Edit</a>
						                <a href="/a_articles/delete/{{ $a->id }}">Delete</a>
                          </td>
                        </tr>
                     @endforeach
                      </tbody>
                     </table>
                </div>
              </div>
            </div>
          </div>
        <!-- /.col-md-6 -->
        </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->

     
 {{ $articles->links() }}
  </div>
  <!-- /.content -->
</div>
  <!-- /.content-wrapper -->



  <!-- FOOTER HERE -->
  @include('admin/footer')
  <!-- END -->

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script type="text/javascript" src="/assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script type="text/javascript" src="/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="/assets/admin/dist/js/adminlte.min.js"></script>






</body>
</html>
