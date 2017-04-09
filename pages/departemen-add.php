<!-- #file:departemen-add.php-->
<style type="text/css">
span.ui-combobox{
	width:227px;
	height:34px;
}
</style>
<section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
 </section>

  <section class="content">
		 <h1 class="page-header"><b>Tambah Departemen</b></h1>

	<form class="form-horizontal" role="form" method="post" action="process/departemen_add_process.php">
		<div class="form-group">
		 			<label for="nama_departemen" class="col-sm-2 control-label">Nama Departemen</label>
		 			<div class="col-sm-4">
		 				<input type="text" class="form-control" name="nama_departemen" placeholder="Masukkan Nama Departemen" title="Nama Departemen" />
		 			</div>
		 </div>
		 
		<div class="form-group">
				 			<label for="pimpinan" class="col-sm-2 control-label">Pimpinan</label>
				 <div class="col-sm-4">
				 <select id="MySelect" name="pimpinan">

				<option selected></option>
				<?php
				$sql="SELECT id,username FROM user";
				foreach ($db->query($sql) as $row) {
				?>
				<option value="<?php echo $row['id'];?>"><?php echo $row['username']." (".$row['id'].")"; ?></option>
				<?php
				}
				?>
				</select>
				</div>

				 			
		</div>

		<script type="text/javascript">
        
          $("#MySelect").combify();
       
     </script>

		<div class="form-group">
		 			<div class="col-sm-offset-2 col-sm-10">
		 			<!-- col-sm-offset-2 untuk kosongan 2 span pada layar dekstop -->
		 			<button type="submit" name="simpan" class="btn btn-primary">
		 			<span class="glyphicon glyphicon-save "></span>&nbsp; Simpan
		 			</button>
		 			<!-- <input type="submit" class="btn btn-primary" name="simpan" value="Simpan"/>	</div> -->
					</div>
		</div>
	</form>

  </section>