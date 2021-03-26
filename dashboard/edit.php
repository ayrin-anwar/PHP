
<!DOCTYPE html>
<html>
	<head>
	   <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
	</head>
	<body>
	<?php
require_once  "inc/header.php";
		require_once '../db.php';
		
		session_start();
		if(isset($_GET['id2']))
		{
			$id2=$_GET['id2'];
			$edit_select="SELECT *FROM users WHERE id=$id2";
			$edit_query=mysqli_query($db,$edit_select);
			$edit_fetch=mysqli_fetch_assoc($edit_query);
		}
		?>
	
		<div class="container">
		
				 <h2 class="text-center text-success">Registration form</h2>
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
        <form action="edit-query.php" method="POST">
        <div class="row">
			
    <div class="form-group d-none">
    
      <input type="text"  value="<?=$edit_fetch['id']?>" class="form-control" id="id2" 
        name="id2">
      
     
   
    </div>
   <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="name2">Name:</label>
      <input type="name" value="<?=$edit_fetch['name']?>" class="form-control"id="name2"
       placeholder="Enter name" name="name2">
      
    
    </div>
     </div>
    <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="email2">Email:</label>
      <input type="email" value="<?=$edit_fetch['email']?>" class="form-control" id="email2"  placeholder="Enter email" name="email2">
      
      
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
		</div>
	</body>
</html>
 <?php

require 'inc/footer.php';
?>