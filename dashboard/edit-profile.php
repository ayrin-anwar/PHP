<?php
require_once 'session.php';
require_once  "inc/header.php";
		require_once '../db.php';
		
		
		//session_start();
		
			$id2=$_SESSION['id'];
			$edit_select="SELECT *FROM users WHERE id=$id2";
			$edit_query=mysqli_query($db,$edit_select);
$edit_fetch=mysqli_fetch_assoc($edit_query);
		   
		?>
	
		
				 <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
         </div>
         <div class="card pd-20 pd-sm-40">
        <form action="profile-update.php" method="POST" enctype="multipart/form-data">
        <div class="row">
			
    <div class="form-group d-none">
    
      <input type="text"  value="<?=$edit_fetch['id']?>" class="form-control" id="id2" 
        name="id2">
      
     
   
    </div>
   <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" value="<?=$edit_fetch['name']?>" class="form-control"id="name"
       placeholder="Enter name" name="name">
      
    
    </div>
     </div>
    <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" value="<?=$edit_fetch['email']?>" class="form-control" id="email"  placeholder="Enter email" name="email">
      
      
      </div>
      </div>
        <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="profile_image">ProfileImage:</label>
      <input type="file"  class="form-control" id="profile_image"   name="profile_image" onchange="document.getElementById('image_id').src = window.URL.createObjectURL(this.files[0])">
      
      
      </div>
      </div>
        <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label class="form-control-label">ProfileImage Preview:</label>
     <img id="image_id" width="50" src="upload/<?=$edit_fetch['profile_image']?>">
      
      </div>
      </div>  
    </div>
   <div class="form--layout-footer ">
    <input type="submit"style="cursor:pointer;" class="btn btn-primary mg-r-5" value="Update">
    </div>
    
		
  </form>
       <!-- sl-page-title -->
       
      
       
      </div>
      <footer class="sl-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright © <?php echo date('Y') ?>. Starlight. All Rights Reserved.</div>
          <div>Made by ThemePixels.</div>
        </div>
        
      </footer><!-- sl-pagebody -->
    </div>
  
			
		</div>	
		
 <?php

require 'inc/footer.php';
?>