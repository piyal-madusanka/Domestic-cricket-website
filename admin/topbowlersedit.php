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
    if(isset($_POST['upcomingeventspost_edit_btn']))
    {
      $id =$_POST['edit_id'];
      $query="SELECT * FROM topbowlerspost WHERE id='$id'";
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
          
                 <label>Full name</label>
          <input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter heading" >
           <label>Category</label>
          <input type="text" name="edit_category" value="<?php echo $row['category'] ?>" class="form-control" placeholder="Enter heading" >
           <label>Place</label>
          <input type="text" name="edit_place" value="<?php echo $row['place'] ?>" class="form-control" placeholder="Enter heading" >
           <label>Innings</label>
          <input type="text" name="edit_innings" value="<?php echo $row['innings'] ?>" class="form-control" placeholder="Enter heading" >
           <label>Total Score</label>
          <input type="text" name="edit_totalscore" value="<?php echo $row['totalscore'] ?>" class="form-control" placeholder="Enter heading" >
           <label>High Score</label>
          <input type="text" name="edit_highscore" value="<?php echo $row['highscore'] ?>" class="form-control" placeholder="Enter heading" >
           <label>Average</label>
          <input type="text" name="edit_average" value="<?php echo $row['average'] ?>" class="form-control" placeholder="Enter heading" >
           <label>Strike rate</label>
          <input type="text" name="edit_rate" value="<?php echo $row['rate'] ?>" class="form-control" placeholder="Enter heading" >

      	</div>
      	 
      	 
         <a href="postupload.php" class="btn btn-danger">Cancel</a>   
         <button class="btn btn-primary" type="submit" name="topbowlerspostupdatebtn" >Update</button> 
         </form>
      	<?php
      	 	
  }
    }
    
    ?>


	</div>
</div>
</div>
</div>





      <?php
include('includes/script.php');
include('includes/footer.php');

  ?>
  