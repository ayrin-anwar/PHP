<?php
 require_once'../db.php';
     session_start();
    if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$id=$_POST['id'];
		
		$copyright=$_POST['copyright'];
		$tagline=$_POST['tagline'];
		$about=$_POST['about'];
			$office_address=$_POST['office_address'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$insert="UPDATE settings SET copyright='$copyright',tagline='$tagline',about='$about',office_address='$office_address',email='$email',phone='$phone' WHERE id='$id'";
		
		$q=mysqli_query($db,$insert);
		
		if($q)
		{
			echo"success";
			$_SESSION['update_success']='Information updated';
	header('location:settings.php');
		}
		else
		{
			echo"errors";
		}
		
		
		
		
		
		
		
		
		
			

	
}
?>