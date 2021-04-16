<!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <?php
//session_start();
require 'inc/header.php';
require '../db.php';
?>
    
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Blank Page</h5>
          <?php 
			$explode=explode('/',$_SERVER['PHP_SELF']);
			$end_file_ext=end($explode);
			echo $end_file_ext;
			?>
          <p>This is a starter page</p>
        </div><!-- sl-page-title -->
        
      </div><!-- sl-pagebody -->
      
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

  

  <?php

require 'inc/footer.php';
?>