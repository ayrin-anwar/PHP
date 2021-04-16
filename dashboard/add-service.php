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
        <form action="service-post.php" method="POST" >
        <div class="row">
		
    
   <div class="col-lg-4 m-auto">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control"id="name"
       placeholder="Enter name" name="name">
      
    
    </div>
     </div>
    <div class="col-lg-4 m-auto">
    <div class="form-group">
      <label for="icon">Icon:</label>
     <select name="icon" id="icon">
        <option value>Select service
        </option>
     	<option value="fab fa-react">CreativeDesign</option>
     	<option value="fab fa-free-code-camp">UnlimitedFeatures</option>
     	<option value="fal fa-desktop">UltraResponsive</option>
     	<option value="fal fa-lightbulb-on">CreativeIdeas</option>
     	<option value="fal fa-edit">EasyCustomization</option>
     	<option value="fal fa-headset">SuperSupport</option>
     </select>
      
      
      </div>
      </div>
       <div class="col-lg-4 m-auto">
    <div class="form-group">
      <label for="summary">Summary:</label>
      <input type="text" class="form-control"id="summary"
       placeholder="enter text" name="summary">
      
    
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