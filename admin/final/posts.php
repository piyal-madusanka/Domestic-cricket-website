<?php

include("header.php");

  ?>
  <style >
.artical-containerposts{
	width: 900;
	background-color:#f3f3f3 ;
	padding: 30px;
}
.article-boxposts{
	padding-bottom: 30px;
	width: 100%;
	
}	
	
</style>

 <div class="artical-containerposts">  
<?php
  $host = "localhost";
    $user = "root";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "sldczone";                                  //Your database name you want to connect to
    $port = 3306;
     $con = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

$qry2=mysqli_query($con,"select * from recenteventspost  where link='".$_GET['link']."'");
	$row=mysqli_fetch_array($qry2);
	
?>
<br>
<div class="card bg-light text-dark"> 
<div class="card-body" >
<h4><?php  echo $row['heading'] ;?></h4>
<?php 
    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="300" width="500"/>'; 
     ?>
     <div>
      <br>
     <h5><?php echo $row['post'] ;;?></h5>
     </div>
</div>
<br>

</div>
</div>




<?php

include("footer.php");

  ?>


