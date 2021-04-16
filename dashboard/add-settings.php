<?php
	require_once'session.php';
require_once"inc/header.php";
		require_once'../db.php';
	
		
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
     <form action="setting-post.php" method="POST" enctype="multipart/form-data">
        <div class="row">
			
    <div class="form-group d-none">
    
      
      
     
   
    </div>
   <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="tagline">Tagline:</label>
  <input type="text"  class="form-control"id="tagline"placeholder="Enter tagline" name="tagline">
      
    
    </div>
     </div>
    <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email"  class="form-control" id="email"  placeholder="Enter email" name="email">
      
      
      </div>
      </div>
        <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="phone"  class="form-control" id="phone"  placeholder="Enter phone" name="phone">
      
      
      </div>
      </div>
         <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="copyright">copyright:</label>
      <input type="text"  class="form-control" id="copyright"  placeholder="Enter copyright" name="copyright">
      
      
      </div>
      </div>
       <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="office_address">Office Address:</label>
      <input type="text"  class="form-control" id="office_address"  placeholder="Enter office_address" name="office_address">
      
      
      </div>
      </div>
       <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="about">About:</label>
      <input type="text"  class="form-control" id="about"  placeholder="Enter about" name="about">
      
      
      </div>
      </div>
        <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="logo">Logo:</label>
      <input type="file"  class="form-control" id="logo"name="logo" >
      
      
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