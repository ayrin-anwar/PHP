<?php
require_once  "inc/header.php";
		require_once '../db.php';
		require_once 'session.php';
		
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
        <form action="portfolio-post.php" method="POST" enctype="multipart/form-data">
        <div class="row">
			
    <div class="form-group d-none">
    
      <input type="text"  value="<?=$edit_fetch['id']?>" class="form-control" id="id2" 
        name="id2">
      
     
   
    </div>
   <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text"  class="form-control"id="title"
       placeholder="Enter title" name="title">
      
    
    </div>
     </div>
    <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="category">Category:</label>
      <input type="text"  class="form-control" id="category"  placeholder="Enter category" name="category">
      
      
      </div>
      </div>
        <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="summary">Summary:</label>
      <input type="text"  class="form-control" id="summary"  placeholder="Enter summary" name="summary">
      
      
      </div>
      </div>
         
      
       
       
         <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="thumbnail">Thumbnail:</label>
      <input type="file"  class="form-control" id="thumbnail"   name="thumbnail" >
      
      
      </div>
      </div>
         <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="featured_image">Featured_Image:</label>
      <input type="file"  class="form-control" id="featured_image"   name="featured_image" >
      
      
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