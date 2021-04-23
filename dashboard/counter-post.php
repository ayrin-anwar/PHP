<?php
  session_start();
     require_once'../db.php';
   
    if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$name=$_POST['name'];
		$icon=$_POST['icon'];
		$value=$_POST['value'];
		$insert="INSERT INTO counters(name,icon,value)VALUES('$name','$icon','$value')";
		$q=mysqli_query($db,$insert);
		if($q)
		{
			echo"success";
			$_SESSION['update_success']='Information updated';
	header('location:counter.php');
		}
		else
		{
			echo"errors";
		}
	}




?>