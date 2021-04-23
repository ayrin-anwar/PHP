<?php
	require_once'session.php';
require_once"inc/header.php";
		require_once'../db.php';
	$select_count="SELECT *FROM settings ";
        $query_count=mysqli_query($db,$select_count);
        $assoc=mysqli_fetch_assoc($query_count);
		   
		
		//session_start();

		
		
		   
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
     <form action="partners-post.php" method="POST" enctype="multipart/form-data">
        <div class="row">
			
    <div class="form-group d-none">
    
      
      
     
   
    </div>
   <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="name">Name:</label>
  <input type="text"  class="form-control"id="name"placeholder="Enter name" name="name">
      
    
    </div>
     </div>
    <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="designation">Designation:</label>
      <input type="text"  class="form-control" id="designation"  placeholder="Enter designation" name="designation">
      
      
      </div>
      </div>
        <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="message">Message:</label>
      <input type="text"  class="form-control" id="message"  placeholder="Enter message" name="message" >
      
      
      </div>
      </div>
         
   
      
        <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="photo">Photo:</label>
      <input type="file"  class="form-control" id="photo"name="photo" >
      
      
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