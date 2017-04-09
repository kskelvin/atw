 <!-- file:user.php -->
<?php
$pesan ="";
if(isset($_SESSION['pesan']) && isset($_SESSION['jenis_pesan'])){
  $pesan="<div class='alert alert-$_SESSION[jenis_pesan]'>$_SESSION[pesan]</div>";
  $_SESSION['pesan']=null;
  $_SESSION['jenis_pesan']=null;
}

$sql="SELECT * FROM user WHERE role= 1 ORDER BY username ASC";
?>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>

    <br>

  <section class="content">

      <?php echo $pesan; ?>
      <div class="row">

            <div class="col-sm-3 col-md-6 col-lg-10"></div>
            <!-- untuk tombol dengan ikon  -->
            <div class="col-sm-9 col-md-6 col-lg-2">
              <a href="index.php?page=user-add" class="btn btn-info btn-sm">
                 <i class="fa fa-user-plus" aria-hidden="true"></i> Tambah User
              </a>
            </div>

      </div>

      <br>
      
      
          <table id="example1" class="table table-striped table-hover nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                      <th><center>No</center></th>
                      <th><center>Username</center></th>
                      <th><center>Password</center></th>
                      <th><center>Action</center></th>
                      
                  </tr>
                </thead>
                  <tbody>
                  <?php
                  $i=1;
                  foreach($db->query($sql) as $row){
                  ?>
                    <tr>
                        <td><center><?php echo $i; ?></center></td>
                        <td><center><?php echo $row['username']; ?></center></td>
                        <td><center>
                        <?php 
                          $password=$row['password'];
                          $password=str_repeat("*", strlen($password));
                          /*fungsi str_repeat("string yang akan diulang",angka pengulangan string) */
                          echo $password;
                         ?> 

                        </center></td>
                        <td><center>
                        <a href="index.php?page=user-edit&id=<?php echo $row['id']; ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                        <!-- <a href="process/user_delete_process.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure delete this user?');"><i class="fa fa-trash"></i>&nbsp;Delete</a> -->
                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal">
                          <i class="fa fa-trash"></i>&nbsp;Delete
                        </button>
                        </center></td>
                    </tr>
                      <?php
                      $i++;
                      }
                      ?>
                  </tbody>
          </table>

    


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header alert-info">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete User</h4>
      </div>
      <div class="modal-body">
      <br>
        <center>
          <p>Are you sure to delete this user?</p>
          <br>
          <a href="process/user_delete_process.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-check"></i>&nbsp;Yes</a>
          <button type="button" class="btn btn-success btn-sm" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;No</button>
        </center>
      <br>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>


</section>

   