<?php
 
 session_start();
require_once '../db.php';
   
    if($_SERVER['REQUEST_METHOD']=='POST')
	{
		 $image_name=$_FILES['logo']['name'];
	     $explode=explode('.',$image_name);
	         $ext=end($explode);
		$ext=strtolower($ext);
	      $allow_format=['jpg','png','jpeg'];
		
		
		$copyright=$_POST['copyright'];
			$about =mysqli_real_escape_string($db,$_POST['about']);
		$tagline=$_POST['tagline'];
	
	
		$office_address=$_POST['office_address'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		date_default_timezone_set("Asia/Dhaka");
	$new_ext="logo".rand(1,3000).date("i_s_a_M_Y").'.'.$ext;
		
		if(empty($tagline))
		{
			
			echo $_SESSION['taglineempty']="tagline will not be empty";
			
			//header('location:add-settings.php');
		}
		
		else if(empty($email))
		{
			echo $_SESSION['emailempty']="email will not be empty";
			//header('location:add-settings.php');
		}
		else if(empty($phone))
		{
			echo $_SESSION['phoneempty']="phone will not be empty";
			//header('location:add-settings.php');
		}
		else if(empty($copyright))
		{
			echo $_SESSION['copyrightempty']="copyright will not be empty";
			//header('location:add-settings.php');
		}
		else if(empty($office_address))
		{
			echo $_SESSION['office_addressempty']="office_address will not be empty";
			//header('location:add-settings.php');
		}else if(empty($about))
		{
			echo $_SESSION['aboutempty']="about will not be empty";
			//header('location:add-settings.php');
		}else if(!empty($image_name))
		{
			if($_FILES['logo']['size']>5000000000 )
		   {
			 $_SESSION['image_sizeerror']="Maximum size is 5mb";
			//header('location:add-settings.php');
		   }elseif(!in_array($ext,$allow_format))
		  {
			
			 $_SESSION['image_extentionerror']="Allowed extensions are jpg,png,JPEG,JPG";
			//header('location:add-settings.php');
		   }
			else{
				$select_oldlocation="SELECT * FROM settings";
				  $s=mysqli_query($db, $select_oldlocation);
				  $selectassoc=mysqli_fetch_assoc($s);
			 $old_location='logo/'. $selectassoc['logo'];
			    
			if($selectassoc['logo']!="default.png")
			{
				if(file_exists($old_location))
				{
					unlink($old_location);
				}
			}
				$update_query="UPDATE settings SET logo='$new_ext'";
             $q=mysqli_query($db,$update_query);
			  if($q)
			  { $new_location = 'logo/'. $new_ext;
                 move_uploaded_file($_FILES['logo']['tmp_name'],$new_location); 
				 
				  
			  }
			else
			{
			  echo"failure";

			}
				
			}
		}
		else{
			
			$update_query="UPDATE settings SET copyright='$copyright',about='$about',tagline='$tagline',office_address='$office_address',email='$email',phone='$phone'";
             $q=mysqli_query($db,$update_query);
			  if($q)
			  {
				  
				  
					  
				 
				  
				
				  $_SESSION['update_success']="Update Success";
				  header('location:settings.php');
				  
			  }
			else
			{
			  echo"failure";

			}
			
//			id
//logo
//copyright
//about
//tagline
			//logo105734_42_pm_Apr_2021.png
//office_address
//email
//phone
//status
			
		}
			
	}

		
		
		
		
		
		
//    if(in_array($ext,$allow_format))
//	{
//     if($_FILES['logo']['size']<5000000000 )
//		{
//			date_default_timezone_set("Asia/Dhaka");//echo rand(1,3000).$id.'.'.$ext;
//	$new_ext="logo".rand(1,3000).date("i_s_a_M_Y").'.'.$ext;
//			
//         
//$new_location = 'logo/'. $new_ext;
//move_uploaded_file($_FILES['logo']['tmp_name'],$new_location);
//		 $update_select="INSERT INTO settings(logo,tagline) VALUES ('$new_ext',$tagline')";	
//$update_query=mysqli_query($db,$update_select);

		
//$update_select="INSERT INTO settings(logo,copyright,about,tagline,office_address,email,phone) VALUES ('$new_ext','$copyright','$about','$tagline','$office_address','$email','$phone')";	
//$update_query=mysqli_query($db,$update_select);

		
		
//		
//        if($update_query)
//		{
//			echo"success";
//$_SESSION['update_success']='Information updated';
////header('location:settings.php');
//		}
//		else
//		{
//			echo"CreativeIt";
//		}
//			
//			}
//			
//	
//	    
//		
//		
//		
//		
//		
//	 
//
//
//	}
//		else{
//			echo"cannot insert";
//		}
	////

?>