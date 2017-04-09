<?php
include("admin/session.php"); 

if(!isset($_SESSION['login']) || $_SESSION['login']!=1)
{
	header("location:login.php");
}

if($_SESSION['role'] == 0)
{
  $role="Staff HRD";
}
else{
  $role="User";
}
require_once("admin/include/db.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>atWorks</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
<!-- untuk edited combo box -->
  <link rel="stylesheet" href="datatable/jquery-ui.css" type="text/css" media="all" />
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="bootstrap/jquery.ui.combify.css" />
    <script src="datatable/jquery.min.js"></script>
    <script src="datatable/jquery-ui.min.js"></script>
    <script type="text/javascript" src="bootstrap/jquery.ui.combify.js"></script>
  <!-- untuk edited combo box  -->
<!-- untuk datatable -->
<link rel="stylesheet" href="datatable/dataTables.bootstrap4.min.css"/>
<!-- untuk datatable -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script>
      var url = window.location;
        // for treeview
      $('ul.treeview-menu a').filter(function() {
        return this.href == url;
      }).closest('.treeview').addClass('active');

//untuk datatable departemen
    $(document).ready(function() {
    $('#example').DataTable();
} );


//untuk datatable user
    $(document).ready(function() {
    $('#example1').DataTable();
} );
    
  </script>
  <style type="text/css">
    .table-hover tbody tr:hover td {
    background-color: #6FA2FF;
    color: #ffffff;
}
  table thead 
  { background-color: #CCE5FF;
  }
  </style>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include_once("template/navbar.php"); ?>
  
  <?php include_once("template/sidebar.php"); ?>
  <!-- include_once memasukkan skrip program hanya 1 kali saja tidak berulang-ulang -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
   <?php
    if(isset($_GET['page']))
    {
      $page =$_GET['page'];
    }
    else
    {
      $page ="dashboard";
    }
      include_once("pages/". $page .".php");
   ?>
  
  </div>
  
 <?php include_once("template/footer.php"); ?>

</div>
<!-- ./wrapper -->
<script src="bootstrap/jquery.min.js"></script>
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- untuk datatable -->
  <script type="text/javascript" src="datatable/jquery.dataTables.min.js"></script>
  
  <script type="text/javascript" src="datatable/dataTables.bootstrap4.min.js"></script>
<!-- untuk datatable -->
</body>
</html>
