<?php
include("header.php")

  ?>

 

  <!--==========================
    Intro Section
  ============================-->
 

  <?php 
       
     include_once'connection.php';
    if(isset($_POST['submit-search'])){
    $search=mysqli_real_escape_string($conn,$_POST['search']);
    $sql="SELECT * FROM recenteventspost  WHERE heading LIKE '%$search%' OR post LIKE '%$search%'";


       }
       $result=mysqli_query($conn,$sql);
       $queryresult=mysqli_num_rows($result);

        if($queryresult>0){
          ?>
       <br>   
      <div class="card bg-light text-dark card-body">    
     <h3> <?php   echo "There is  ".$queryresult." results !";?></h3></div> 
<?php  
          while ($row=mysqli_fetch_assoc($result )) 
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
         echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"   height="400" width="600"/>';     
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
 }else{
  ?>
    <div class="card bg-light text-dark card-body">    
     <h3> <?php   echo "There is  ".$queryresult." results !";?></h3></div> 
     <?php
  echo "<br/>";
  echo "<br/>";
  echo "<br/>";
  echo "<br/>";
  echo "<br/>";
 }

 ?>
 

  <!--==========================
    Footer
  ============================-->
 </div>
 

  <?php


  include("footer.php");
    ?>