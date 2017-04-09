<!--file :navbar.php -->
<?php
      
$id=$_SESSION['id_admin'];

$sql="SELECT * FROM user WHERE id = :id_admin";

$stmt=$db->prepare($sql);
//untuk mengirimkan query 

$stmt->execute(['id_admin' => $id]);
//jalankan query
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><h6>atWorks</h6></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>atWorks</b></span>
    </a>
    
    <nav class="navbar navbar-static-top">
     
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="profile/<?php echo $pic; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $user; ?></span>
            </a>
            <ul class="dropdown-menu">
              
              <li class="user-header">
                <img src="profile/<?php echo $pic; ?>" class="img-circle" alt="User Image">

                <p>
                  
                  <?php echo $user; ?>
                  <small><?php echo $role; ?></small>
                </p>

              </li>
              
              
              <li class="user-body">
                <div class="col-xs-6 text-center">

                  <a href="index.php?page=profile&id=<?php echo $row['id'];?>" class="btn btn-info">
                  <span class="glyphicon glyphicon-user"></span>&nbsp; Profile</a>
                </div>
                <div class="col-xs-6 text-center">
                  <a href="admin/logout.php" class="btn btn-info">
                  <span class="glyphicon glyphicon-log-out"></span>&nbsp; Log out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
          -->
        </ul>
      </div>
    </nav>
  </header>