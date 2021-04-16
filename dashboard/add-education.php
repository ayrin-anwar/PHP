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
        <form action="education-post.php" method="POST" enctype="multipart/form-data">
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
      <label for="year">Year:</label>
      <input type="year"  class="form-control" id="year"  placeholder="Enter year" name="year">
      
      
      </div>
      </div>
       <style>
			.slidecontainer {
  width: 100%; /* Width of the outside container */
}

/* The slider itself */
.slider {
  -webkit-appearance: none;  /* Override default CSS styles */
  appearance: none;
  width: 100%; /* Full-width */
  height: 25px; /* Specified height */
  background: #d3d3d3; /* Grey background */
  outline: none; /* Remove outline */
  opacity: 0.7; /* Set transparency (for mouse-over effects on hover) */
  -webkit-transition: .2s; /* 0.2 seconds transition on hover */
  transition: opacity .2s;
}

/* Mouse-over effects */
.slider:hover {
  opacity: 1; /* Fully shown on mouse-over */
}

/* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
.slider::-webkit-slider-thumb {
  -webkit-appearance: none; /* Override default look */
  appearance: none;
  width: 25px; /* Set a specific slider handle width */
  height: 25px; /* Slider handle height */
  background: #4CAF50; /* Green background */
  cursor: pointer; /* Cursor on hover */
}

.slider::-moz-range-thumb {
  width: 25px; /* Set a specific slider handle width */
  height: 25px; /* Slider handle height */
  background: #4CAF50; /* Green background */
  cursor: pointer; /* Cursor on hover */
}</style><span id="demo"></span>
        <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="progress">Progress:</label>
    
      <input type="range" min="1" max="100" value="50" class="slider" id="progress" name="progress">
      
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