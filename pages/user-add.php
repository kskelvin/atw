<!--File :user-add.php -->

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
		 <h1 class="page-header"><b>Tambah User</b></h1>
		 	<form class="form-horizontal" role="form" method="post" action="process/user_add_process.php" enctype="multipart/form-data">

		 		<div class="form-group">
		 			<label for="username" class="col-sm-2 control-label">Username</label>
		 			<div class="col-sm-5">
		 				<input type="text" class="form-control" name="username" required="required" placeholder="Masukkan Username" title="username" />
		 			</div>
		 		</div>

				<div class="form-group">
		 			<label for="password" class="col-sm-2 control-label">Password</label>
		 			<div class="col-sm-5">
		 				<input type="password" class="form-control" name="password" required="required" placeholder="Masukkan Password" title="password" />
		 			</div>
		 		</div>

		 		<div class="form-group">
		 			<label for="file" class="col-sm-2 control-label">Profile Image</label>
		 			<div class="col-sm-5">
		 				<input type="file" class="form-control" name="gambar" accept="image/*" />
		 			</div>

		 		</div>


		 		<div class="form-group">
		 			<div class="col-sm-offset-2 col-sm-10">
		 			<!-- col-sm-offset-2 untuk kosongan 2 span pada layar dekstop -->
		 			<button type="submit" name="simpan" class="btn btn-primary">
		 			<span class="glyphicon glyphicon-save "></span>&nbsp; Simpan
		 			</button>
		 			<!-- <input type="submit" class="btn btn-primary" name="simpan" value="Simpan"/>	</div> -->
		 		</div>
		 	</form>


    </section>