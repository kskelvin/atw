<!-- #file:departemen_add_process.php-->
<?php

session_start();
include_once("../admin/include/db.php");

if(isset($_POST['simpan']))
{
	$nama_dep=$_POST['nama_departemen'];
	$pimpinan=$_POST['pimpinan'];
	$role_dep=0;
	//role = 0 berarti departemen

	  $sql = "INSERT INTO departemen_grup (nama_dep,pimpinan_dep,role_dep) VALUES (:nam, :pim, :role)";
      $stmt = $db->prepare($sql);
      $stmt->execute(['nam' => $nama_dep, 'pim' => $pimpinan, 'role' => $role_dep]);
      // Redirect ke halaman user
        $_SESSION['pesan'] = "Departemen baru berhasil ditambahkan.";
        $_SESSION['jenis_pesan'] = "info";
        header('Location: ../index.php?page=departemen');

}

?>