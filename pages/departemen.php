 <!-- file:departemen.php -->
<?php
$pesan ="";
if(isset($_SESSION['pesan']) && isset($_SESSION['jenis_pesan'])){
  $pesan="<div class='alert alert-$_SESSION[jenis_pesan]'>$_SESSION[pesan]</div>";
  $_SESSION['pesan']=null;
  $_SESSION['jenis_pesan']=null;
}

$sql="SELECT 
      departemen_grup.id, departemen_grup.nama_dep, departemen_grup.role_dep, user.username FROM departemen_grup 
      INNER JOIN user
      ON departemen_grup.pimpinan_dep =user.id";
?>


 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Departemen
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Departemen</li>
      </ol>
    </section>

    <br>
<section class="content">

<?php echo $pesan; ?>
   <div class="row">

            <div class="col-sm-3 col-md-6 col-lg-10"></div>
            <!-- untuk tombol dengan ikon  -->
            <div class="col-sm-9 col-md-6 col-lg-2">
              <a href="index.php?page=departemen-add" class="btn bg-orange btn-sm">
                 <i class="fa fa-plus" aria-hidden="true"></i> Tambah 
              </a>
            </div>

    </div>

        <br />

        
  <table id="example" class="table table-striped table-hover nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id Departemen</th>
                <th>Nama Departemen</th>
                <th>Pimpinan Departemen</th>
                <th>Jumlah Anggota</th>
                <th>Action</th>
            </tr>
        </thead>
      <tbody>
        <?php
        $i=1;
        foreach($db->query($sql) as $row){
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['nama_dep']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td></td>
                <td>
                <a href="#" class="btn btn-info btn-xs" title="View Departemen"><i class="fa fa-eye"></i></a>
                <a href="#" class="btn btn-primary btn-xs" title="Add User To Departemen"><i class="fa fa-user-plus"></i></a>
                <a href="#" class="btn btn-success btn-xs" title="Delete User From Departemen"><i class="fa fa-user-times"></i></a>
                
                <a href="index.php?page=departemen-edit&id=<?php echo $row['id']; ?>" class="btn btn-warning btn-xs" title="Edit Departemen"><i class="fa fa-edit"></i></a> 
                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal1" title="Delete Departemen">
                          <i class="fa fa-trash"></i>
                        </button>
                </td>
                
            </tr>
             <?php
              $i++;
              }
              ?>
            
      </tbody>
  </table>

  <!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header alert-info">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Departemen</h4>
      </div>
      <div class="modal-body">
      <br>
        <center>
          <p>Are you sure to delete this Departemen?</p>
          <br>
          <a href="process/departemen_delete_process.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-check"></i>&nbsp;Yes</a>
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

   