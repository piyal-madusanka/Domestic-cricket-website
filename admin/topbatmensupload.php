 <?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');

      ?>


<div class="modal fade" id="momentpostupload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">upload Top Batsmens post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php"  method="POST" enctype="multipart/form-data">
      <div class="modal-body">

      	<div class="form-group">
      		<label>Post heading</label>
      		<input type="text" name="heading" class="form-control" placeholder="Enter Description" >
        </div> 
            <div class="form-group">
            <label>Add photo</label>
            <br>
       <input type="file" name="image" id="image" /> 
           </div>
      		<div class="form-group">
      		<label>Post Description</label>
          <textarea rows="10" type="text" name="post" class="form-control" placeholder="Enter Description"></textarea>
      		
      	</div>
            <div class="form-group">
          <label>Full name</label>
          <input type="text" name="name" class="form-control" placeholder="Enter full name" >
        </div>
            <div class="form-group">
          <label>Category</label>
          <input type="text" name="category" class="form-control" placeholder="Enter category" >
        </div>
            <div class="form-group">
          <label>School/Club</label>
          <input type="text" name="place" class="form-control" placeholder="Enter place" >
        </div>
            <div class="form-group">
          <label>Total innings</label>
          <input type="text" name="innings" class="form-control" placeholder="Enter total innings" >
        </div>
            <div class="form-group">
          <label>Total Score</label>
          <input type="text" name="totalscore" class="form-control" placeholder="Enter Total score" >
        </div>
            <div class="form-group">
          <label>High Score</label>
          <input type="text" name="highscore" class="form-control" placeholder="Enter highscore" >
        </div>
            <div class="form-group">
          <label>Average</label>
          <input type="text" name="average" class="form-control" placeholder="Enter average" >
        </div>
            <div class="form-group">
          <label>Strike rate</label>
          <input type="text" name="rate" class="form-control" placeholder="Enter Strike rate" >
        </div>

      	 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="topbatmenspostuploadbtn" id="postuploadbtn" value="postuploadbtn" >Save changes</button>
      </div>
      </form>
     

  
    </div>
  </div>
</div>
	<div class="card shadow-mb-4">
		<div class="card-header py-3 ">
			<h6 class="m-0 front-weight-bolt text-primary">top batmens Postupload section
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#momentpostupload">
  Add post
</button>
			</h6>
			
		</div>
  <div class="card-body">
    <?php 
     if(isset($_SESSION['success']) && $_SESSION['success']!=''){
      
        echo '<h2>'.$_SESSION['success'].'</h2>';
        unset($_SESSION['success']);

      }
      if(isset($_SESSION['status']) && $_SESSION['status']!=''){
      
        echo '<h2 class"bg-info">'.$_SESSION['status'].'</h2>';
        unset($_SESSION['status']);  
     } 



     ?>
  	<div class="table-responsive">
      <?php
     include_once'includes/connection.php';
     $query = "SELECT * FROM topbatmenspost";
     $query_run = mysqli_query($conn,$query);

      ?>
  		<table class="table table-bodered" id="datatable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Id</th>
       <th scope="col">Heading</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">name</th>
      <th scope="col">Category</th>
      <th scope="col">Place</th>
      <th scope="col">Total innings</th>
      <th scope="col">Total Score</th>
      <th scope="col">High Score</th>
      <th scope="col">Average</th>
      <th scope="col">Strike rate</th>
      

  

      
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
    <?php
 
    if(mysqli_num_rows($query_run )>0)
    {
      while ($row=mysqli_fetch_assoc($query_run )) 
      {
      
       ?>
      
    <tr>
      
      <td><?php echo $row['id'];       ?>  </td>
      <td><?php echo $row['heading']; ?>  </td>
      <td><?php echo $row['post']; ?>  </td>
      <td><?php echo  '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="100" width="100"/>';     ?>  </td>
    <td><?php echo $row['name']; ?>  </td>
    <td><?php echo $row['category']; ?>  </td>
    <td><?php echo $row['place']; ?>  </td>
    <td><?php echo $row['innings']; ?>  </td>
    <td><?php echo $row['totalscore']; ?>  </td>
    <td><?php echo $row['highscore']; ?>  </td>
    <td><?php echo $row['average']; ?>  </td>
    <td><?php echo $row['rate']; ?>  </td>   
                <td>
            <form action="topbatsmensedit.php" method="POST">
              <input type="hidden" name="edit_id" value="<?php echo $row['id'];   ?>">
            

            <button type="submit" name="upcomingeventspost_edit_btn" class="btn btn-success">EDIT</button> 
            </form>
          </td>
          <td>
          <form action="code.php" method="POST">
            <input type="hidden" name="delet_id"  value="<?php echo $row['id'];   ?>">
           <button type="submit" name="topbatsmenspost_deletbtn" class="btn btn-danger">DELETE</button> 
           </form>

           </td>
     
      
    </tr>
       <?php  
     }
    
   }
   else{
    echo "No record found";
   }


      ?>
   
  </tbody>
</table>
  		
  	</div>
   
  </div>
</div>

<?php
include('includes/script.php');
include('includes/footer.php');

  ?>
  