<?php
require_once  "inc/header.php";
		require_once '../db.php';
		require_once 'session.php';
		
		//session_start();
		
			$id2=$_SESSION['id'];
			$edit_select="SELECT *FROM users WHERE id=$id2";
			$edit_query=mysqli_query($db,$edit_select);
 $edit_fetch=mysqli_fetch_assoc($edit_query);
		   
		?>
	
		
				 <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
      </nav>

      <div class="sl-pagebody">
       <div class="row">
       	<div class="col-lg-8 m-auto">
       		<div class="<?php if(isset( $_SESSION['changepasssucc'])) {echo 'alert alert-success';}?>">
       			<?php
				   if(isset( $_SESSION['changepasssucc']))
				   {
					   echo $_SESSION['changepasssucc'];
					   unset($_SESSION['changepasssucc']);
				   }
				?>
       		</div>
       	</div>
       </div>
         <div class="card pd-20 pd-sm-40">
        <form action="changepassword-post.php" method="POST">
        <div class="row">
			
    <div class="form-group d-none">
    
      <input type="text"  value="<?=$edit_fetch['id']?>" class="form-control" id="id2" 
        name="id2">
      
     
   
    </div>
   <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="name">Password:</label>
      <input type="password"  class="form-control"id="currentpassword"
       placeholder="Enterpassword" name="currentpassword" value="<?php if(isset( $_SESSION['currentpassword'])){echo $_SESSION['currentpassword'] ;unset($_SESSION['currentpassword']);} ?>">
       <span class="text-danger">
       <?php
		   if(isset($_SESSION['passempty']))
		   {
			  echo $_SESSION['passempty'] ;
			   echo"<style>#password{border:1px solid red;}</style>";
				   unset($_SESSION['passempty']);
		   }
		   else if(isset($_SESSION['passerror']))
		   {
			   echo $_SESSION['passerror'] ;
			   echo"<style>#password{border:1px solid red;}</style>";
				   unset($_SESSION['passerror']);
		   }
		   
		   ?>
       	
       </span>
      
    
    </div>
     </div>
    <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="newpassword">New Password:</label>
      <input type="password"
       
       class="form-control" id="newpassword"  placeholder="Enter new password" name="newpassword" value="<?php if(isset( $_SESSION['newpassword'])) {echo $_SESSION['newpassword'] ;unset($_SESSION['newpassword']);} ?>">
       <span class="text-danger">
       <?php
		   if(isset($_SESSION['newpasswordempty']))
		   {
			  echo $_SESSION['newpasswordempty'] ;
			   echo"<style>#newpassword{border:1px solid red;}</style>";
				   unset( $_SESSION['newpasswordempty']);
		   }
		  
		   
		   ?>
       	
       </span>
      
      
      </div>
      </div>
        <div class="col-lg-6 m-auto">
    <div class="form-group">
      <label for="confirmpassword">Confirm Password:</label>
      <input type="password"  class="form-control" id="confirmpassword"   name="confirmpassword" value="<?php if(isset( $_SESSION['confirmpassword'])) {echo $_SESSION['confirmpassword'] ;unset($_SESSION['confirmpassword']);} ?>">
      <span class="text-danger">
       <?php
		   if(isset($_SESSION['confirmpasswordempty']))
		   {
			  echo $_SESSION['confirmpasswordempty'] ;
			   echo"<style>#confirmpassword{border:1px solid red;}</style>";
				   unset( $_SESSION['confirmpasswordempty']);
		   }
		  else if(isset($_SESSION['passmatcherror']))
		  {
			  echo $_SESSION['passmatcherror'] ;
			   echo"<style>#confirmpassword{border:1px solid red;}</style>";
				   unset( $_SESSION['passmatcherror']);
		  }
		  else if(isset($_SESSION['passvalidateerror']))
		  {
			   echo $_SESSION['passvalidateerror'] ;
			   echo"<style>#confirmpassword{border:1px solid red;}</style>";
				   unset( $_SESSION['passvalidateerror']);
		  }
		  
		   
		   ?>
       	
       </span>
      
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