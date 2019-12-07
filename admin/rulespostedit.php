<?php
    session_start();
include('includes/header.php');
include('includes/navbar.php');

      ?>
<div class="container-fluid">
	<div class="card shadow mb-4">
	<div class="card-header py-3">
	<h6 class="m-0 front-weight-bold text-primary">Edit post</h6>
	<div class="card-body">

    <?php 
    include_once'includes/connection.php';
    if(isset($_POST['post_edit_btn']))
    {
      $id =$_POST['edit_id'];
      $query="SELECT * FROM rulespost WHERE id='$id'";
      $query_run = mysqli_query($conn,  $query);

      foreach ($query_run as $row) 
      {
      	?>

    <form action="code.php" method="POST" enctype="multipart/form-data">
    	<input type="hidden" name="edit_id" value="<?php echo $row['id']  ?>">
 		<div class="form-group">	
      		<label>Heading</label>
      		<input type="text" name="edit_username" value="<?php echo $row['heading'] ?>" class="form-control" placeholder="Enter heading" >
          <label>Post</label>
          <input type="text" name="edit_post" value="<?php echo $row['post'] ?>" class="form-control" placeholder="Enter post" >

         
             <label>Link</label>
               <input type="text" name="edit_link" value="<?php echo $row['link'] ?>" class="form-control" placeholder="Enter link" >

      	</div>
      	 
      	 
         <a href="postupload.php" class="btn btn-danger">Cancel</a>   
         <button class="btn btn-primary" type="submit" name="rulespostupdatebtn" onclick="checkDetails()">Update</button> 
         </form>
      	<?php
      	 	
  }
    }
    
    ?>
