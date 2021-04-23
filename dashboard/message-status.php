<?php   

require_once'../db.php';
session_start();
$id=$_GET['id'];
$select="SELECT * FROM contacts where id='$id'";
$q1=mysqli_query($db,$select);
$assoc=mysqli_fetch_assoc($q1);
if($assoc['status']==1)
{
	$updatecontacts="UPDATE contacts SET status=2 where id='$id'";


$q=mysqli_query($db,$updatecontacts);
if($q)
{
	
	header('location:contact.php');
	
}
}else
{
	$updatecontacts="UPDATE contacts SET status=1 where id='$id'";


$q=mysqli_query($db,$updatecontacts);
if($q)
{
	
	
	header('location:contact.php');
	
}
}










?>