
<?php
session_start();
require_once '../db.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
	$user_check="SELECT COUNT(*) as total FROM users WHERE email='$email'";
	$q=mysqli_query($db,$user_check);
	$after_assoc=mysqli_fetch_assoc($q);
	if($after_assoc['total']>0)
	{
		echo "email found";
	}
	else
	{$insert="INSERT  INTO users(name,email,password)VALUES('$name','$email','$password')";
	$query=mysqli_query($db,$insert);
		
	
	if($query)
{
	echo"string";
}
else
{
	echo"errors";
}}
	
	
    }


     
  
else{
	header('location:index.php');
}
	
	

?>