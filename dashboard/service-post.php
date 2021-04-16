<?php
     require_once'../db.php';
     session_start();
    if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$name=$_POST['name'];
		$icon=$_POST['icon'];
		$summary=$_POST['summary'];
		$insert="INSERT INTO services(name,icon,summary)VALUES('$name','$icon','$summary')";
		$q=mysqli_query($db,$insert);
		if($q)
		{
			echo"success";
			$_SESSION['update_success']='Information updated';
	header('location:service.php');
		}
		else
		{
			echo"errors";
		}
	}




?>