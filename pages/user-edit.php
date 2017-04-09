<!-- file:user-edit.php -->
<?php

// GET URL DATA
$id = $_GET['id'];

$sql = "SELECT * FROM user WHERE id=:id";
$stmt = $db->prepare($sql);
$stmt->execute(['id'=>$id]);
$row = $stmt->fetch();

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

    <br/>

    <section class="content">
		<h1 class="page-header"><b>Edit Data User</b></h1>
				<form class="form-horizontal" role="form" method="post" action="process/user_edit_process.php?id=<?php echo $row['id'];?>">

					<div class="form-group">
			 			<label for="username" class="col-sm-2 control-label">Username</label>
			 			<div class="col-sm-5">
			 				<input type="text" class="form-control" name="username" required="required" placeholder="Masukkan Username" value="<?php echo $row['username']; ?>" />
			 			</div>
			 		</div>


					<div class="form-group">
			 			<label for="password" class="col-sm-2 control-label">Password</label>
			 			<div class="col-sm-5">
			 				<input type="password" class="form-control" name="password" placeholder="Masukkan Password" value=""/>
			 				<input type="hidden" class="form-control" name="passwordlama" value="<?php echo $row['password']; ?>"/>
			 				
			 			</div>
			 		</div>

			 		<div class="form-group">
			 			<div class="col-sm-offset-2 col-sm-10">
			 			<!-- col-sm-offset-2 untuk kosongan 2 span pada layar dekstop -->
				 			<button type="submit" name="simpan" class="btn btn-primary">
		 				<span class="glyphicon glyphicon-save "></span>&nbsp; Simpan
		 					</button>
		 					<a class="btn btn-primary" href="index.php?page=user" title="Back">
		 			<span class="glyphicon glyphicon-menu-left"></span>&nbsp;</a>
		 			
			 			</div>
			 		</div>



				</form>


	</section>
