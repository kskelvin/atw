<!-- file:departemen-edit.php -->
<?php

// GET URL DATA
$id = $_GET['id'];

$sql = "SELECT * FROM departemen_grup WHERE id=:id";
$stmt = $db->prepare($sql);
$stmt->execute(['id'=>$id]);
$row = $stmt->fetch();

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


    <br/>

    <section class="content">
		<h1 class="page-header"><b>Edit Data User</b></h1>
				<form class="form-horizontal" role="form" method="post" action="process/departemen_edit_process.php?id=<?php echo $row['id'];?>">

					<div class="form-group">
			 			<label for="departemen_name" class="col-sm-2 control-label">Nama Departemen</label>
			 			<div class="col-sm-5">
			 				<input type="text" class="form-control" name="nama_departemen" required="required" placeholder="Masukkan Nama Departemen" value="<?php echo $row['nama_dep']; ?>" />
			 			</div>
			 		</div>

			 		<div class="form-group">
			 			<label for="pimpinan_name" class="col-sm-2 control-label">Nama Pimpinan</label>
			 			<div class="col-sm-5">

			 			<select class="form-control" name="nama_pimpinan">
			 			<?php
						$sql1="SELECT id,username FROM user";
						foreach($db->query($sql1) as $row1)
					{
							if ($row['pimpinan_dep']==$row1['id']){
						?>
			 			<option value="<?php echo $row1 ['id'] ?>" selected>
							<?php echo $row1['username'] ."(".$row1['id'].")";	 ?>
						</option>
						<?php
					}else{
				?>
				<option value="<?php echo $row1 ['id'] ?>" >
							<?php echo $row1['username'] ."(".$row1['id'].")";	 ?>
						</option>
						<?php
						}
					}
						?>

			 			</select>
			 			</div>
			 		</div>


			 		<div class="form-group">
			 			<div class="col-sm-offset-2 col-sm-10">
			 			<!-- col-sm-offset-2 untuk kosongan 2 span pada layar dekstop -->
				 			<button type="submit" name="simpan" class="btn btn-primary">
		 				<span class="glyphicon glyphicon-save "></span>&nbsp; Simpan
		 					</button>
		 					<a class="btn btn-primary" href="index.php?page=departemen" title="Back">
		 			<span class="glyphicon glyphicon-menu-left"></span>&nbsp;</a>
		 			
			 			</div>
			 		</div>
   				</form>

    </section>


