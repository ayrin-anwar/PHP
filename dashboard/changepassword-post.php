<?php
 require_once'../db.php';
require_once 'session.php';
 if($_SERVER['REQUEST_METHOD']=='POST')
  {
	 $currentpassword=$_POST['currentpassword'];
	$newpassword=$_POST['newpassword'];
	 $confirmpassword=$_POST['confirmpassword'];
	 $sessionpassword=$_SESSION['password'];
	 $id=$_SESSION['id'];
	 $regexpass='/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%.]{8,20}$/';
	 if(empty($currentpassword))
	 {
		$_SESSION['passempty']="please enter your password"; 
		 header('location:changepassword.php');
	 }
	 else if(empty($confirmpassword))
	 {
		 $_SESSION['confirmpasswordempty']="please enter your new  password"; 
		 header('location:changepassword.php');
	 }
	 else if(empty($newpassword))
	 {
		$_SESSION['newpasswordempty']="please enter your new  password"; 
		 header('location:changepassword.php');
	 }
	 else if(!password_verify($current
							  password,$sessionpassword))
	 {
		 $_SESSION['passerror']="Incorrect password";
		// echo  $password;
		 //echo  $sessionpassword;
		  
		 header('location:changepassword.php');
	 }
	 else if($newpassword!=$confirmpassword)
	 {
		  $_SESSION['passmatcherror']="Passwords do not match";
		  header('location:changepassword.php');
	 }
	 else if(!preg_match($regexpass,$confirmpassword))
	 {
		  $_SESSION['passvalidateerror']="passwords must contain at least one special character,number,alphabet";
		  header('location:changepassword.php');
	 }
     else{
		 $pass=password_hash($newpassword,PASSWORD_BCRYPT) ;
	 $update="Update  users SET password='$pass' WHERE id=$id";
	 $q=mysqli_query($db,$update);
	 $_SESSION['changepasssucc']="your password is updated successFully";
	 $_SESSION['password']=$pass;
	 header('location:changepassword.php');
	 }
	 
  
  
  }


?>