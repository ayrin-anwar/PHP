<?php
  session_start();
  require_once'db.php';
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
     $email=$_POST['email'];
	$password=$_POST['password'];
    $select="SELECT COUNT(*) as total,id,name,email,password,role,profile_image FROM users WHERE  email='$email'";
	$query=mysqli_query($db,$select);
	  $assoc=mysqli_fetch_assoc($query);
	  //echo $assoc['total'];
	  //die();
	  if($assoc['total']>0)
	  {
		  //echo "found";
		  //echo $assoc['password'];
		  $hash=$assoc['password'];
		  if(password_verify($password,$hash))
		  {
              //echo"match";
			 $_SESSION['email']=$assoc['email'];
			 $_SESSION['id']=$assoc['id'];
			  	 $_SESSION['name']=$assoc['name'];
			  $_SESSION['password']=$assoc['password'];
			    $_SESSION['profile_image']=$assoc['profile_image'];
			   
			  
			 //die("OK"); 
			  header('location:dashboard/dashboard.php');
		 }
		  else{
			 echo"does not match";
		  }
			  
	  }
	  else{
		  echo "Not found";
	  }
  
  
  }


?>