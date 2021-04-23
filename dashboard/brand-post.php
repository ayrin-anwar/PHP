<?php
require_once'session.php';
require_once'../db.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$id=$_SESSION['id'];
	
	
	
	
		
	//header('location:portfolio.php');
	
	//$last_insert_id=mysqli_insert_id($db);
		  // $thumbnail=$_SESSION['thumbnail'];
//print_r($_FILES['profile_image']['name']);
	
	 $image_name=$_FILES['picture']['name'];
	 $explode=explode('.',$image_name);
	$ext=end($explode);
	$allow_format=['jpg','png','JPEG','PNG'];
	
	
	if((in_array($ext,$allow_format)))
	{
if(($_FILES['picture']['size']<5000000000) )
		{
	       date_default_timezone_set("Asia/Dhaka");
			//echo rand(1,3000).$id.'.'.$ext;
$new_ext ="brand".rand(1,3000).date("i_s_a_M_Y").'.'.$ext;
			
			
			
			
			
			
			$new_location = 'brandimage/'. $new_ext;
			move_uploaded_file($_FILES['picture']['tmp_name'],$new_location);
			
			
		
			
			$update_select="INSERT INTO brands(picture)VALUES('$new_ext')";
$update_query=mysqli_query($db,$update_select);
			
			
			if($update_query)
			{
				$_SESSION['update_success']='Information updated';
				header('location:brand.php');
			}
			
		}
		else
		{
			echo "no";
		}
	}
	
	
	
	else{
		echo "not allowed";
	}
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