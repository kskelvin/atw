<!--File :departemen_delete_process.php -->
<?php
include_once("../admin/include/db.php");

//mendapatkan url data
$id=$_GET['id'];

$sql = "DELETE FROM departemen_grup WHERE id=:id";
$stmt = $db->prepare($sql);
$stmt->execute(['id'=>$id]);

header('Location: ../index.php?page=departemen');

?>