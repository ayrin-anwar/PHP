<?php
  
require_once '../db.php';
session_start();
$id=$_GET['id'];

$select_delete_item="UPDATE users SET status=2 WHERE id=$id";
$delete_query=mysqli_query($db,$select_delete_item);
if($delete_query)
{
	$_SESSION['item_moved_to_trash']='information deleted';
	header('location:users.php');
}


?>