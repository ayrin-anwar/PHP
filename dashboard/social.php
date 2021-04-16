<?php
  require_once  "inc/header.php";
    require_once "../db.php";
 
   $select="SELECT *FROM social WHERE status='active'";
   $querydata=mysqli_query($db,$select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  
   
</head>
<body>

<div class="container">
 <div class="row">
  <div class="col-lg-10 m-auto">
   <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
        <?php
	  if(isset($_SESSION['item_moved_to_trash'])):?>
	  <div class="alert alert-danger text-center"><span>
	  <?=$_SESSION['item_moved_to_trash']?></span></div>
	  <?php unset($_SESSION['item_moved_to_trash']);
	  endif?>
	<?php 
	  if(isset($_SESSION['update_success'])):?>
	   <div class="alert alert-success text-center"><span>
	  <?=$_SESSION['update_success'];unset($_SESSION['update_success']);?></span></div>
	    <?php 
	  endif?>
	
  <h2 class="text-center">All Socials</h2>
  <div class="text-right">
      <a href="add-social.php"><i class="fa fa-plus"></i>ADD</a>
  	
  </div>          
  <table class="table" id="myTable">
    <thead>
      <tr>
        
       <th>sl</th>
        <th>Name</th>
        <th>Icon</th>
        <th>Link</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
 <?php
foreach($querydata as $key=>$value){?>
 <tr>
        <td><?=++$key ?></td>
         <td><?=$value['name']?></td>
          <td><i class="<?=str_replace('fab','fa',$value['icon']) ?>"></i>
		  </td>
           <td><?=$value['link']?></td>
             <td><?=$value['status']?></td>
        <td>
        <a href="#" class="btn btn-primary">Edit</a>
        <button  class="btn btn-danger UserDelete" >Delete</button>
        </td>
</tr>

<?php }
?>
  
 </tbody>
  </table>
	
        </div><!-- sl-page-title -->
       
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
</div>

</body>
</html>
  <script>
	
	
	</script> 
    <!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

  

  <?php

require 'inc/footer.php';
?>