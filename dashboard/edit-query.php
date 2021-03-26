<?php
   
require_once '../db.php';

		
session_start();
$id2=$_POST['id2'];
$email=$_POST['email2'];
$name=$_POST['name2'];
$update_select="UPDATE users SET name='$name',email='$email' WHERE id=$id2";
$update_query=mysqli_query($db,$update_select);
if($update_query)
{
	$_SESSION['update_success']='Information updated';
	header('location:users.php');
}
?>