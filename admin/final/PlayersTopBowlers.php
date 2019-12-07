<?php

include("header.php");

  ?>



 
 <?php 
       
     include_once'connection.php';
     $query = "SELECT * FROM topbowlerspost";
     $query_run = mysqli_query($conn,$query);

        if(mysqli_num_rows($query_run )>0){

          while ($row=mysqli_fetch_assoc($query_run )) 
      {
       
    ?>
 

   <div class="card bg-light text-dark">
    <div class="card-body">
      <div>
      <h2>
        <br>
      <?php 
         echo $row['heading'] ;


         echo "<br>";
            ?>
              </h2>

         </div >
       <div >
        <?php 
         echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-thumbnail" height="300" width="500"/>';     
      ?>
      <h4>
        <br>
       
      <?php
      echo $row['post'] ;
          ?>
           
         </h4>
         
       </div>


<?php 

 
 ?>
 <table class="table table-bodered" id="datatable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col"><h4>Full name</h4></th>
      <th scope="col"><h4>Category</h4></th>
      <th scope="col"><h4>School/Club</h4></th>
      <th scope="col"><h4>Total innings</h4></th>
      <th scope="col"><h4>Total wickets</h4></th>
      <th scope="col"><h4>most vickets for inning</h4></th>
      <th scope="col"><h4>average</h4></th>
      <th scope="col"><h4>Strike rate</h4></th>
      


      
     
    </tr>
  </thead>
  <tbody>
    <?php
 
 
     
      
       ?>
      
    <tr>
      
        <td><h5><?php echo $row['name'];       ?> </h5> </td>
      <td><h5><?php echo $row['category']; ?> </h5> </td>
      <td><h5><?php echo $row['place']; ?> </h5> </td>
      <td><h5><?php echo $row['innings']; ?> </h5> </td>
      <td><h5><?php echo $row['totalscore']; ?> </h5> </td>
      <td><h5><?php echo $row['highscore']; ?> </h5> </td>
      <td><h5><?php echo $row['average']; ?> </h5> </td>
      <td><h5><?php echo $row['rate']; ?> </h5> </td>
      
    </tr> 
  </tbody>
</table>
     </div>
  </div> 
    <?php  
    
}
 }
      ?>
  </div>
 

  <?php


  include("footer.php");
    ?>