<?php
require_once'session.php';
require_once'../db.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$name=$_POST['name'];
		$email=$_POST['email'];
		$id=$_SESSION['id'];
	    $profile_image=$_SESSION['profile_image'];
//print_r($_FILES['profile_image']['name']);
	
	 $image_name=$_FILES['profile_image']['name'];
	 $explode=explode('.',$image_name);
	$ext=end($explode);
	$allow_format=['jpg','png','JPEG','PNG'];
	
	
	if(in_array($ext,$allow_format))
	{
		if($_FILES['profile_image']['size']<5000000)
		{
			//echo rand(1,3000).$id.'.'.$ext;
			$new_ext = $id.'.'.$ext;
			$img_check="SELECT * FROM users WHERE id=$id";
			$img_q=mysqli_query($db,$img_check);
			$img_assoc=mysqli_fetch_assoc($img_q);
$old_image_location='upload/'.$img_assoc['profile_image'];
			if($img_assoc['profile_image']!='default.png')
			{
				
			
			if(file_exists($old_image_location))
			{
				unlink($old_image_location);
			}
			}
			
			
			
			
			
			$new_location = 'upload/'. $new_ext;
			move_uploaded_file($_FILES['profile_image']['tmp_name'],$new_location);
			$update_select="UPDATE users SET name='$name',email='$email',profile_image='$new_ext' WHERE id='$id'";
$update_query=mysqli_query($db,$update_select);
if($update_query)
 {
	$_SESSION['name']=$name;
	header('location:edit-profile.php');
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