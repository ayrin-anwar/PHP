<?php
  require_once  "inc/header.php";
    require_once "../db.php";
 
   $select="SELECT *FROM education WHERE status='active'";
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
	
  <h2 class="text-center">ALL Education</h2>
   <div class="text-right">
      <a href="add-education.php"><i class="fa fa-plus"></i>ADD</a>
  	
  </div>           
  <table class="table" id="myTable">
    <thead>
      <tr>
        
       <th>sl</th>
        <th>Title</th>
        <th>Year</th>
        <th>Progress</th>
        <th>Status</th>
         <th>Action</th>
      </tr>
    </thead>
    <tbody>
 <?php
foreach($querydata as $key=>$value){?>
 <tr>
        <td><?=++$key ?></td>
         <td><?=$value['title']?></td>
          <td><?=$value['year']?></td>
          <td><?=$value['progress']?></td>
          <td><?=$value['status']?></td>
        <td><a href="edit.php?id2=<?=$value['id']?>" class="btn btn-primary">Edit</a><button data-id="<?=$value['id']?>" class="btn btn-danger UserDelete" >Delete</button></td>
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
	$('.UserDelete').click(function(){
		let id=$(this).attr("data-id");
		swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
		
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
	  window.setTimeout(function(){ 
		  window.location.href='delete-user.php?id='+id;},7000);
	 
  } else {
    swal("Your imaginary file is safe!");
  }
});
	})
	
	</script> 
    <!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

  

  <?php

require 'inc/footer.php';
?>