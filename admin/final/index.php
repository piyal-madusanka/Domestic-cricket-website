<?php
include("header.php")

  ?>

 
  <main id="main">
     <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
        <?php 
       
     include_once'connection.php';
     $query = "SELECT * FROM aboutus";
     $query_run = mysqli_query($conn,$query);

        if(mysqli_num_rows($query_run )>0){

          while ($row=mysqli_fetch_assoc($query_run )) 
     {
         ?> 
         <div class="text-center">
        <h4>
        <?php
         echo $row['description'] ;
        
           ?>
         </h4>
         </div>
         <?php 
      }

        }
            ?>
          
        </header>
        <div>
          <br>
          <br>
        </div>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                      <?php 
       
     include_once'connection.php';
     $query = "SELECT * FROM mission";
     $query_run = mysqli_query($conn,$query);

        if(mysqli_num_rows($query_run )>0){

          while ($row=mysqli_fetch_assoc($query_run )) 
    {
         ?> 
       <div class="text-center">
        <h5>
        <?php
         echo $row['description'] ;
        
           ?>
         </h5>
         </div>
         <?php 
      }

        }
            ?>

              </p>
              
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
                             <?php 
       
     include_once'connection.php';
     $query = "SELECT * FROM ourplan";
     $query_run = mysqli_query($conn,$query);

        if(mysqli_num_rows($query_run )>0){

          while ($row=mysqli_fetch_assoc($query_run )) 
      {
         ?> 
        <div class="text-center">
        <h5>
        <?php
         echo $row['description'] ;
        
           ?>
         </h5>
         </div>
         <?php 
      }

        }
            ?>
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
                  <?php 
       
     include_once'connection.php';
     $query = "SELECT * FROM vision";
     $query_run = mysqli_query($conn,$query);

        if(mysqli_num_rows($query_run )>0){

          while ($row=mysqli_fetch_assoc($query_run ))
         
      {
         ?> 
        <div class="text-center">
        <h5>
        <?php
         echo $row['description'] ;
        
           ?>
         </h5>
         </div>
         <?php 
      }

        }
            ?>
   

         
               
              </p>
            </div>
          </div>

        </div>
 

      </div>

  
  </main>  
 
 <?php 
       
     include_once'connection.php';
     $query = "SELECT * FROM frontpost";
     $query_run = mysqli_query($conn,$query);

        if(mysqli_num_rows($query_run )>0){

          while ($row=mysqli_fetch_assoc($query_run )) 
      {
       
    ?>
    <!-- panal -->
 <div class="container-fluid">

  <div class="row">
    <div class="col-sm-1" style="background-color:#3399ff;">
    
    
    </div>
    <div class="col-sm-10" style="background-color:#1a1a1a;">
  <br>
<div class="card bg-light text-dark">
    <div class="card-body" style="background-color:#b3c6ff;">
    <div class="container">
     <div class="row">
      <div class="col-lg-8">
      
      <div>
      <h4><p class="font-weight-bold">   
      <?php 
         echo $row['heading'] ;


         echo "<br>";
            ?>
             </p> </h4>
</div>
         </div >
       </div>
     </div>
       <div >
        <?php 
         echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="400" width="600"/>';     
      ?>

      

      <br>
      <h5 >
      <?php
         
         echo $row['post'] ;

         ?>
           <a href= "posts.php?link=<?php echo $row['link'] ?>">Show more Details . . . .</a>
         </h5>

      
         
       </div>
    </div>
  </div>
<br>
    </div>

    <div class="col-sm-1" style="background-color:#3399ff;">
    
    
    </div>
  </div>
</div>
<!-- end panal -->   

  
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