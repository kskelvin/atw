<!--File :departemen_edit_process.php -->
<?php
session_start();
include_once("../admin/include/db.php");

// URL DATA
$id = $_GET['id'];

if(isset($_POST['simpan']))
{
// Form Data
$nama_pim= $_POST['nama_pimpinan'];
$nama_dep	= $_POST['nama_departemen'];
$role_dep	= 0;
//role_dep = 0 berarti departemen

$sql = "UPDATE departemen_grup SET nama_dep=:nama_dep, role_dep=:role_dep, pimpinan_dep=:pimpinan_dep WHERE id=:id";
$stmt = $db->prepare($sql);
$stmt->execute(['nama_dep' => $nama_dep, 'role_dep' => $role_dep, 'pimpinan_dep' => $nama_pim, 'id' => $id]);

$_SESSION['pesan']="Data Departemen berhasil diupdate.";
$_SESSION['jenis_pesan'] ="info";
header('Location: ../index.php?page=departemen');
}
?>