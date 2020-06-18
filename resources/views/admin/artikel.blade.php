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

  <title>AdminLTE 3 | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" type="text/css" href="/assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="/assets/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
<!-- 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
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
          <div class="col-lg-8">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Artikel</h5>
              </div>
              <div class="card-body">
              <a href="/artikel/add"> + Tambah Artikel Baru</a>
                <!-- tabel artikel here -->
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Author</th>
                          <th>Category</th>
                          <th>Content</th>
                          <th>Created_at</th>
                          <th>Update_at</th>
                          <th>Option</th>
                        </tr>
                      </thead>
                      <tbody>
                     @foreach ($tb_article as $a)
                        <tr>
                          <td>{{ $a->id_article }}</td>
                          <td>{{ $a->author }}</td>
                          <td>{{ $a->category }}</td>
                          <td>{{ $a->content }}</td>
                          <td>{{ $a->created_at }}</td>
                          <td>{{ $a->updated_at }}</td>
                          <td>
                            <a href="#">Edit</a>
						                <a href="#">Hapus</a>
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

<!-- DATE -->
<script type="text/javascript">
    $('.date').datepicker({  
       format: 'mm-dd-yyyy'
     });  
</script>
<!-- FORM -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
// UNTUK UPLOAD 
//Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>



</body>
</html>