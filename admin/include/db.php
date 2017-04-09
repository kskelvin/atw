<?php

try{
	$con= 'mysql:host=localhost;dbname=atwork';
	$db= new PDO($con,'root','');

}catch(PDOException $e){
	echo $e->getMessage();
	die();
}

?>