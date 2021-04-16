<?php
 
 session_start();
require_once '../db.php';
   
    if($_SERVER['REQUEST_METHOD']=='POST')
	{
		 $image_name=$_FILES['logo']['name'];
	     $explode=explode('.',$image_name);
	         $ext=end($explode);
	      $allow_format=['jpg','png','JPEG','PNG'];
		
		$copyright=$_POST['copyright'];
			$about =mysqli_real_escape_string($db,$_POST['about']);
		$tagline=$_POST['tagline'];
	
	
		$office_address=$_POST['office_address'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
    if(in_array($ext,$allow_format))
	{
     if($_FILES['logo']['size']<5000000000 )
		{
			date_default_timezone_set("Asia/Dhaka");//echo rand(1,3000).$id.'.'.$ext;
	$new_ext="logo".rand(1,3000).date("i_s_a_M_Y").'.'.$ext;
			
         
$new_location = 'logo/'. $new_ext;
move_uploaded_file($_FILES['logo']['tmp_name'],$new_location);
		
$update_select="INSERT INTO settings(logo,copyright,about,tagline,office_address,email,phone) VALUES ('$new_ext','$copyright','$about','$tagline','$office_address','$email','$phone')";	
$update_query=mysqli_query($db,$update_select);

		
		
		
        if($update_query)
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
			
	
	    
		
		
		
		
		
	 


	}
	}

?>