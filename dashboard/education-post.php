<?php
     require_once'../db.php';
     session_start();
    if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$title=$_POST['title'];
		$progress=$_POST['progress'];
		$year=$_POST['year'];
		$insert="INSERT INTO education(title,year,progress)VALUES('$title','$year','$progress')";
		$q=mysqli_query($db,$insert);
		if($q)
		{
			echo"success";
			$_SESSION['update_success']='Information updated';
	header('location:education.php');
		}
		else
		{
			echo"errors";
		}
	}




?>