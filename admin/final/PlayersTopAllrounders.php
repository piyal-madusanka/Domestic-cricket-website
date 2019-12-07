<?php

include("header.php");

  ?>

  
  
 <?php 
       
     include_once'connection.php';
     $query = "SELECT * FROM topallrounderspost ";
     $query_run = mysqli_query($conn,$query);

        if(mysqli_num_rows($query_run )>0){

          while ($row=mysqli_fetch_assoc($query_run )) 
      {
       
    ?>
 
<br>
   <div class="card bg-light text-dark">
    <div class="card-body">
      <div>
      <h4>
        <br>
      <?php 
         echo $row['heading'] ;


         echo "<br>";
            ?>
              </h4>

         </div >
       <div >
        <?php 
         echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-thumbnail "height="300" width="600"/>';     
      ?>
      <h5>
        <br>
       
      <?php
      echo $row['post'] ;
          ?>
           
         </h5>
         
       </div>


<?php 

 
 ?>
 <table class="table table-hover " id="datatable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col"><h5>Full name</h5></th>
      <th scope="col"><h5>School/Club</h5></th>
      <th scope="col"><h5>Total innings</h5></th>
      <th scope="col"><h5>Total Score</h5></th>
      <th scope="col"><h5>Total wickets</h5></th>
      <th scope="col"><h5>High Score</h5></th>
    <th scope="col"><h5>Highest Wicket for inning</h5></th>
      <th scope="col"><h5>average</h5></th>
      <th scope="col"><h5>Strike rate</h5></th>
      


      
     
    </tr>
  </thead>
  <tbody>
    <?php
 
 
     
      
       ?>
     
    <tr>
      
      <td><h5><?php echo $row['name'];       ?> </h5> </td>
      <td><h5><?php echo $row['place']; ?> </h5> </td>
      <td><h5><?php echo $row['innings']; ?> </h5> </td>
      <td><h5><?php echo $row['totalscore']; ?> </h5> </td>
    <td><h5><?php echo $row['totalwicket']; ?> </h5> </td>
      <td><h5><?php echo $row['highscore']; ?> </h5> </td>
      <td><h5><?php echo $row['wicket']; ?> </h5> </td>
      <td><h5><?php echo $row['average']; ?> </h5> </td>
      <td><h5><?php echo $row['rate']; ?> </h5> </td>

      
    </tr>
  
   
  </tbody>
</table>
     </div>
  </div> 
  <br>
       <?php  
     
    
   
   

}
 }
      ?>
 

  

  </div>
 

  <?php


  include("footer.php");
    ?>
