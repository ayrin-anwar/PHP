<?php
     require_once'../db.php';
     session_start();
    if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$name=$_POST['name'];
		$icon=$_POST['icon'];
		$link=$_POST['link'];
		$insert="INSERT INTO social(name,icon,link)VALUES('$name','$icon','$link')";
		$q=mysqli_query($db,$insert);
		if($q)
		{
			echo"success";
			$_SESSION['update_success']='Information updated';
	header('location:social.php');
		}
		else
		{
			echo"errors";
		}
	}




?>