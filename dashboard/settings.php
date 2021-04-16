<?php
require_once'session.php';

  require_once  "inc/header.php";
    require_once "../db.php";

 
  $select="SELECT *FROM settings WHERE status=1";
   $querydata=mysqli_query($db,$select);
   $select_count="SELECT COUNT(*) as total FROM settings ";
   $query_count=mysqli_query($db,$select_count);
   $assoc=mysqli_fetch_assoc($query_count);
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
	
  <h2 class="text-center">All Settings</h2>
  <div class="text-right">
     <?php if($assoc['total']>0): ?>
       
      <a href="edit-settings.php"><i class="fa fa-plus"></i>Edit</a>
      <?php else:?>
  	<a href="add-settings.php"><i class="fa fa-plus"></i>ADD</a>
  	 <?php endif?>
  </div>          
  <table class="table" id="myTable">
    <thead>
      <tr>
        
       <th>sl</th>
          <th>logo</th>
        <th>copyright</th>
        <th>about</th>
        <th>tagline</th>
          <th>office_address</th>
            <th>email</th>
              <th>phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
 <?php
foreach($querydata as $key=>$value){?>
 <tr>
        <td><?=++$key ?></td>
           <td><?=$value['logo']?></td>
          <td><?=$value['copyright']?></td>
          <td><?=$value['about']?>"></td>
            <td><?=$value['tagline']?>"></td>
             <td><?=$value['office_address']?>"></td>
              <td><?=$value['email']?>"></td>
               <td><?=$value['phone']?>"></td>
        <td>
        <a href="edit-settings.php?id=<?=$value['id'] ?>" class="btn btn-primary">Edit</a>
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