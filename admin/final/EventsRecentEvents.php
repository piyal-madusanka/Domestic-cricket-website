<?php

include("header.php");

  ?>


  <?php 
       
     include_once'connection.php';
     $query = "SELECT * FROM recenteventspost";
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
         echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="700" width="1000"/>';     
      ?>
      <h5>
        <br>
       
      <?php
      echo $row['post'] ;
          ?>
           
         </h5>
         
       </div>
    </div>
  </div>
  <hr>
<?php 
}
 }
 
 ?>
 
</div>
  

  <!--==========================
    Footer
  ============================-->
 <?php
  include("footer.php");
  
   ?>
 

