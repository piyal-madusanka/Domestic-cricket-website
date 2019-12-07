<?php
    session_start();
include('includes/header.php');
include('includes/navbar.php');

      ?>




<div class="container-fluid">
  <div class="card shadow mb-4">
  <div class="card-header py-3">
  <h6 class="m-0 front-weight-bold text-primary">Edit description</h6>
  <div class="card-body">

    <?php 
    include_once'includes/connection.php';
    if(isset($_POST['our_plan_edit_btn']))
    {
      $id =$_POST['edit_id'];
      $query="SELECT * FROM ourplan WHERE id='$id'";
      $query_run = mysqli_query($conn,  $query);

      foreach ($query_run as $row) 
      {
        ?>

    <form action="code.php" method="POST">
      <input type="hidden" name="edit_id" value="<?php echo $row['id']  ?>">
    <div class="form-group">  
          <label>Description</label>
          <input type="text" name="edit_username" value="<?php echo $row['description'] ?>" class="form-control" placeholder="Enter user name" >
        </div>
         
         
         <a href="aboutus.php" class="btn btn-danger">Cancel</a>   
         <button class="btn btn-primary" type="submit" name="our_plan_updatebtn" >Update</button> 
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
