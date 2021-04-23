<?php
require_once  "inc/header.php";
	
		   
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
        <form action="counter-post.php" method="POST" >
        <div class="row">
		
    
   <div class="col-lg-4 m-auto">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control"id="name"placeholder="Enter name" name="name">
      
    
    </div>
     </div>
    <div class="col-lg-4 m-auto">
    <div class="form-group">
      <label for="icon">Icon:</label>
     <select name="icon" id="icon">
        <option value>Select counter
        </option>
     	<option value="flaticon-award">Feature Item</option>
     	<option value="flaticon-like">Active Products</option>
     	<option value="flaticon-event">Year Experience</option>
     	<option value="flaticon-woman">Our Clients</option>
     </select>
      
      
      </div>
      </div>
       <div class="col-lg-4 m-auto">
    <div class="form-group">
      <label for="value">Value:</label>
      <input type="text" class="form-control"id="value"
       placeholder="enter value" name="value">
      
    
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