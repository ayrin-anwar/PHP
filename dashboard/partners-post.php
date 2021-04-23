<?php
require_once'session.php';
require_once'../db.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$id=$_SESSION['id'];
	$name=$_POST['name'];
	$designation=$_POST['designation'];
	       
	$message =mysqli_real_escape_string($db,$_POST['message']);
	
	
	
		
	//header('location:portfolio.php');
	
	//$last_insert_id=mysqli_insert_id($db);
		  // $thumbnail=$_SESSION['thumbnail'];
//print_r($_FILES['profile_image']['name']);
	
	 $image_name=$_FILES['photo']['name'];
	 $explode=explode('.',$image_name);
	$ext=end($explode);
	$allow_format=['jpg','png','JPEG','PNG'];
	  if((in_array($ext,$allow_format)))
	{
if(($_FILES['photo']['size']<5000000000))
		{
	       date_default_timezone_set("Asia/Dhaka");
			//echo rand(1,3000).$id.'.'.$ext;
$new_ext ="thumnail".rand(1,3000).date("i_s_a_M_Y").'.'.$ext;
			
			
			
			
			
			
			$new_location = 'partners/'. $new_ext;
			move_uploaded_file($_FILES['photo']['tmp_name'],$new_location);
			
			
			
			
			$update_select="INSERT INTO partners(name,designation,message,photo)VALUES('$name','$designation','$message','$new_ext')";
$update_query=mysqli_query($db,$update_select);
			
			
			if($update_query)
			{
				header('location:partners.php');
			}
			
		}
		else
		{
			echo "no";
		}
	}
	
	
//	if((in_array($ext,$allow_format))&&(in_array($ext1,$featured_allow_format)))
//	{
//if(($_FILES['thumbnail']['size']<5000000000) && ($_FILES['featured_image']['size']<5000000000))
//		{
//	       date_default_timezone_set("Asia/Dhaka");
//			//echo rand(1,3000).$id.'.'.$ext;
//$new_ext ="thumnail".rand(1,3000).date("i_s_a_M_Y").'.'.$ext;
//			
//			
//			
//			
//			
//			
//			$new_location = 'images/'. $new_ext;
//			move_uploaded_file($_FILES['thumbnail']['tmp_name'],$new_location);
//			
//			
//			$new_ext1 = "featured_image".rand(1,300).date("i_s_a_M_Y").'.'.$ext1;
//			
//			
//			
//			
//			
//			
//			$new_location1 = 'images1/'. $new_ext1;
//			move_uploaded_file($_FILES['featured_image']['tmp_name'],$new_location1);
//			
//			$update_select="INSERT INTO portfolios(title,category,summary,thumbnail,featured_image)VALUES('$title','$category','$summary','$new_ext','$new_ext1')";
//$update_query=mysqli_query($db,$update_select);
//			
//			
//			if($update_query)
//			{
//				header('location:portfolio.php');
//			}
//			
//		}
//		else
//		{
//			echo "no";
//		}
//	}
//	
//	
//	
//	else{
//		echo "not allowed";
//	}
	//print_r($ext);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//$update_select="UPDATE users SET name='$name',email='$email' WHERE id=$id";
//$update_query=mysqli_query($db,$update_select);
//if($update_query)
 // {//
	//$_SESSION['name']=$name;
	//header('location:edit-profile.php');
//}
}

?>