<?php

session_start();
include_once'includes/connection.php';

if (isset($_POST['registerbtn'])) {
	

     

         $username=$_POST['username'];
         $email=$_POST['email'];
         $password=$_POST['password'];
         $confirmpassword=$_POST['confirmpassword'];

         if($password == $confirmpassword){

         $query="INSERT INTO admin_register(username,email,password) VALUES ('$username','$email','$password')";
         $query_run=mysqli_query($conn,$query); 
    
         if($query_run){
    	      //echo "saved";
         	$_SESSION['success']="admin profile added";
         	header('location:register.php');
          }else {
             // echo "not saved";
          		$_SESSION['status']="admin profile not added";
         	header('location:register.php');
   
          }

        }else{

          	$_SESSION['status']="password and confirm password does not match";
         	header('location:register.php');



        }



}


if (isset($_POST['updatebtn']))
 {
    $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
    $email=$_POST['edit_email'];
    $password=$_POST['edit_password'];
  
    $query="UPDATE admin_register SET username='$username',email='$email',password='$password' WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
     if($query_run)
     {
        $_SESSION['success']="Your data is updated";
        header('Location:register.php');
     }else
     {
      $_SESSION['status']="Your data is not updated";
        header('Location:register.php');
     }
   

}

if (isset($_POST['deletbtn']))
 {
    $id=$_POST['delet_id'];
    $query="DELETE FROM admin_register WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
     {
        $_SESSION['success']="Your data is Deleted";
        header('Location:register.php');
     }else
     {
      $_SESSION['status']="Your data is not Deleted";
        header('Location:register.php');
     }

 }

if (isset($_POST['login_btn']))
 {
   $email_login=$_POST['email'];
   $password_login=$_POST['password'];
   $query="SELECT * FROM admin_register WHERE email='$email_login' AND password='$password_login '";
   $query_run=mysqli_query($conn,$query);
   if(mysqli_num_rows($query_run) )
     {
       $query2 = "SELECT * FROM admin_register ";
     $query_run2 = mysqli_query($conn,$query);

        if(mysqli_num_rows($query_run2 )>0){

          while ($row=mysqli_fetch_assoc($query_run )) 
     {
        $_SESSION['username']=$row['username'];
        header('Location:index.php');
      }
    }
     }else
     {
      $_SESSION['status']="Email/password is invalid";
        header('Location:login.php');
     }

 }
 if (isset($_POST['aboutusregisterbtn'])) {
    

     

         $username=$_POST['username'];
        

        

         $query="INSERT INTO aboutus(description) VALUES ('$username')";
         $query_run=mysqli_query($conn,$query); 
    
         if($query_run){
              //echo "saved";
            $_SESSION['success']="Description added";
            header('location:aboutus.php');
          }else {
             // echo "not saved";
                $_SESSION['status']="description not added";
            header('location:aboutus.php');
   
          }


       }


if (isset($_POST['aboutusupdatebtn']))
 {
    $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
   
  
    $query="UPDATE aboutus SET description='$username' WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
     if($query_run)
     {
        $_SESSION['success']="Your data is updated";
        header('Location:aboutus.php');
     }else
     {
      $_SESSION['status']="Your data is not updated";
        header('Location:aboutus.php');
     }
   

}


if (isset($_POST['aboutusdeletbtn']))
 {
    $id=$_POST['delet_id'];
    $query="DELETE FROM aboutus WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
     {
        $_SESSION['success']="Your data is Deleted";
        header('Location:aboutus.php');
     }else
     {
      $_SESSION['status']="Your data is not Deleted";
        header('Location:aboutus.php');
     }

 }
 if (isset($_POST['visionregisterbtn'])) {
    

     

         $username=$_POST['username'];
        

        

         $query="INSERT INTO vision(description) VALUES ('$username')";
         $query_run=mysqli_query($conn,$query); 
    
         if($query_run){
              //echo "saved";
            $_SESSION['success']="vision added";
            header('location:aboutus.php');
          }else {
             // echo "not saved";
                $_SESSION['status']="vision not added";
            header('location:aboutus.php');
   
          }

       }



if (isset($_POST['vision_updatebtn']))
 {
    $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
   
  
    $query="UPDATE vision SET description='$username' WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
     if($query_run)
     {
        $_SESSION['success']="Your vision is updated";
        header('Location:aboutus.php');
     }else
     {
      $_SESSION['status']="Your vision is not updated";
        header('Location:aboutus.php');
     }
   

}
 if (isset($_POST['mission_register_btn'])) {
    

     

         $username=$_POST['username'];
        

        

         $query="INSERT INTO mission(description) VALUES ('$username')";
         $query_run=mysqli_query($conn,$query); 
    
         if($query_run){
              //echo "saved";
            $_SESSION['success']="mission added";
            header('location:aboutus.php');
          }else {
             // echo "not saved";
                $_SESSION['status']="mission not added";
            header('location:aboutus.php');
   
          }

       }


if (isset($_POST['mission_updatebtn']))
 {
    $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
   
  
    $query="UPDATE mission SET description='$username' WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
     if($query_run)
     {
        $_SESSION['success']="Your mission is updated";
        header('Location:aboutus.php');
     }else
     {
      $_SESSION['status']="Your mission is not updated";
        header('Location:aboutus.php');
     }
   

}
if (isset($_POST['mission_deletbtn']))
 {
    $id=$_POST['delet_id'];
    $query="DELETE FROM mission WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
     {
        $_SESSION['success']="Your mission is Deleted";
        header('Location:aboutus.php');
     }else
     {
      $_SESSION['status']="Your mission is not Deleted";
        header('Location:aboutus.php');
     }

 }
 if (isset($_POST['vision_deletbtn']))
 {
    $id=$_POST['delet_id'];
    $query="DELETE FROM vision WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
     {
        $_SESSION['success']="Your vision is Deleted";
        header('Location:aboutus.php');
     }else
     {
      $_SESSION['status']="Your vision is not Deleted";
        header('Location:aboutus.php');
     }

 }
  if (isset($_POST['our_plan_registerbtn'])) {
    

     

         $username=$_POST['username'];
        

        

         $query="INSERT INTO ourplan(description) VALUES ('$username')";
         $query_run=mysqli_query($conn,$query); 
    
         if($query_run){
              //echo "saved";
            $_SESSION['success']="plan added";
            header('location:aboutus.php');
          }else {
             // echo "not saved";
                $_SESSION['status']="plan not added";
            header('location:aboutus.php');
   
          }
          

       }
       if (isset($_POST['our_plan_updatebtn']))
 {
    $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
   
  
    $query="UPDATE ourplan SET description='$username' WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
     if($query_run)
     {
        $_SESSION['success']="Your plan is updated";
        header('Location:aboutus.php');
     }else
     {
      $_SESSION['status']="Your plan is not updated";
        header('Location:aboutus.php');
     }
   

}

if (isset($_POST['our_plan_deletbtn']))
 {
    $id=$_POST['delet_id'];
    $query="DELETE FROM ourplan WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
     {
        $_SESSION['success']="Your plan is Deleted";
        header('Location:aboutus.php');
     }else
     {
      $_SESSION['status']="Your plan is not Deleted";
        header('Location:aboutus.php');
     }

 }

 if (isset($_POST['postuploadbtn'])) {
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
       $heading=$_POST['heading'];
       $post=$_POST['post'];
       $link=$_POST['link'];

         $query="INSERT INTO frontpost(heading,post,image,link) VALUES ('$heading','$post','$file','$link')";
         $query_run=mysqli_query($conn,$query); 
    
         if($query_run){
              //echo "saved";
            $_SESSION['success']="Description added";
            header('location:postupload.php');
          }else {
             // echo "not saved";
                $_SESSION['status']="description not added";
            header('location:postupload.php');
   
          }


       }
 
//Update
if (isset($_POST['frontpostupdatebtn']))
 {

    $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
    $post=$_POST['edit_post'];
     $link=$_POST['edit_link'];

   
   

    $query="UPDATE frontpost SET heading='$username', post='$post',link='$link' WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
     if($query_run)
     {
        $_SESSION['success']="Your data is updated";
        header('Location:postupload.php');
     }else
     {
      $_SESSION['status']="Your data is not updated";
        header('Location:postupload.php');
     }
   

}
if (isset($_POST['frontpost_deletbtn']))
 {
    $id=$_POST['delet_id'];
    $query="DELETE FROM frontpost WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
     {
        $_SESSION['success']="Your plan is Deleted";
        header('Location:postupload.php');
     }else
     {
      $_SESSION['status']="Your plan is not Deleted";
        header('Location:postupload.php');
     }

 }

   if (isset($_POST['interviewpostuploadbtn'])) {
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
       $heading=$_POST['heading'];
       $post=$_POST['post'];
       $link=$_POST['link'];
         $query="INSERT INTO interviewpost(heading,post,image,link) VALUES ('$heading','$post','$file','$link')";
         $query_run=mysqli_query($conn,$query); 
    
         if($query_run){
              //echo "saved";
            $_SESSION['success']="Description added";
            header('location:topinterviewpostupload.php');
          }else {
             // echo "not saved";
                $_SESSION['status']="description not added";
            header('location:topinterviewpostupload.php');
   
          }


       }
           if (isset($_POST['interviewpostupdatebtn']))
 {

    $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
    $post=$_POST['edit_post'];
  
   
  
    $query="UPDATE interviewpost SET heading='$username', post='$post' WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
     if($query_run)
     {
        $_SESSION['success']="Your data is updated";
        header('Location:topinterviewpostupload.php');
     }else
     {
      $_SESSION['status']="Your data is not updated";
        header('Location:topinterviewpostupload.php');
     }
   }

if (isset($_POST['interviewpost_deletbtn']))
 {
    $id=$_POST['delet_id'];
    $query="DELETE FROM interviewpost WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
     {
        $_SESSION['success']="Your plan is Deleted";
        header('Location:topinterviewpostupload.php');
     }else
     {
      $_SESSION['status']="Your plan is not Deleted";
        header('Location:topinterviewpostupload.php');
     }

 }
 if (isset($_POST['teampostuploadbtn'])) {
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
       $heading=$_POST['heading'];
       $post=$_POST['post'];
         $query="INSERT INTO teampost(heading,post,image) VALUES ('$heading','$post','$file')";
         $query_run=mysqli_query($conn,$query); 
    
         if($query_run){
              //echo "saved";
            $_SESSION['success']="Description added";
            header('location:topteampostupload.php');
          }else {
             // echo "not saved";
                $_SESSION['status']="description not added";
            header('location:topteampostupload.php');
   
          }


       }
  if (isset($_POST['teampostupdatebtn']))
 {

    $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
    $post=$_POST['edit_post'];

   
  
    $query="UPDATE teampost SET heading='$username', post='$post' WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
     if($query_run)
     {
        $_SESSION['success']="Your data is updated";
        header('Location:topteampostupload.php');
     }else
     {
      $_SESSION['status']="Your data is not updated";
        header('Location:topteampostupload.php');
     }
   }

if (isset($_POST['teampost_deletbtn']))
 {
    $id=$_POST['delet_id'];
    $query="DELETE FROM teampost WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
     {
        $_SESSION['success']="Your plan is Deleted";
        header('Location:topteampostupload.php');
     }else
     {
      $_SESSION['status']="Your plan is not Deleted";
        header('Location:topteampostupload.php');
     }

 }
  if (isset($_POST['rulespostuploadbtn'])) {
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
       $heading=$_POST['heading'];
       $post=$_POST['post'];
       $link=$_POST['link'];
         $query="INSERT INTO rulespost(heading,post,image,link) VALUES ('$heading','$post','$file','$link')";
         $query_run=mysqli_query($conn,$query); 
    
         if($query_run){
              //echo "saved";
            $_SESSION['success']="Description added";
            header('location:rulespostupload.php');
          }else {
             // echo "not saved";
                $_SESSION['status']="description not added";
            header('location:rulespostupload.php');
   
          }
        }
        if (isset($_POST['rulespostupdatebtn']))
 {

    $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
    $post=$_POST['edit_post'];
     $link=$_POST['edit_link'];

  
   

    $query="UPDATE rulespost SET heading='$username', post='$post',link='$link' WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
     if($query_run)
     {
        $_SESSION['success']="Your data is updated";
        header('Location:rulespostupload.php');
     }else
     {
      $_SESSION['status']="Your data is not updated";
        header('Location:rulespostupload.php');
     }
   

}
if (isset($_POST['rulespost_deletbtn']))
 {
    $id=$_POST['delet_id'];
    $query="DELETE FROM rulespost WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
     {
        $_SESSION['success']="Your plan is Deleted";
        header('Location:rulespostupload.php');
     }else
     {
      $_SESSION['status']="Your plan is not Deleted";
        header('Location:rulespostupload.php');
     }

 }
  if (isset($_POST['recenteventspostuploadbtn'])) {
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
       $heading=$_POST['heading'];
       $post=$_POST['post'];
       $link=$_POST['link'];
         $query="INSERT INTO recenteventspost(heading,post,image,link) VALUES ('$heading','$post','$file','$link')";
         $query_run=mysqli_query($conn,$query); 
    
         if($query_run){
              //echo "saved";
            $_SESSION['success']="Description added";
            header('location:recenteventsupload.php');
          }else {
             // echo "not saved";
                $_SESSION['status']="description not added";
            header('location:recenteventsupload.php');
   
          }
        }
        if (isset($_POST['recenteventspostupdatebtn']))
 {

    $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
    $post=$_POST['edit_post'];
     $link=$_POST['edit_link'];

   
   

    $query="UPDATE recenteventspost SET heading='$username', post='$post',link='$link' WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
     if($query_run)
     {
        $_SESSION['success']="Your data is updated";
        header('Location:recenteventsupload.php');
     }else
     {
      $_SESSION['status']="Your data is not updated";
        header('Location:recenteventsupload.php');
     }
   

}
if (isset($_POST['recenteventspost_deletbtn']))
 {
    $id=$_POST['delet_id'];
    $query="DELETE FROM recenteventspost WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
     {
        $_SESSION['success']="Your plan is Deleted";
        header('Location:recenteventsupload.php');
     }else
     {
      $_SESSION['status']="Your plan is not Deleted";
        header('Location:recenteventsupload.php');
     }

 }

  if (isset($_POST['topbatmenspostuploadbtn'])) {
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
       $heading=$_POST['heading'];
       $post=$_POST['post'];
       $name=$_POST['name'];
       $category=$_POST['category'];
       $place=$_POST['place'];
       $innings=$_POST['innings'];
       $totalscore=$_POST['totalscore'];
       $highscore=$_POST['highscore'];
       $average=$_POST['average'];
       $rate=$_POST['rate'];
                 
       

       
         $query="INSERT INTO topbatmenspost(heading,post,image,name,category,place,innings,totalscore,highscore,average,rate) VALUES ('$heading','$post','$file','$name','$category','$place','$innings','$totalscore','$highscore','$average','$rate')";
         $query_run=mysqli_query($conn,$query); 
    
         if($query_run){
              //echo "saved";
            $_SESSION['success']="Description added";
            header('location:topbatmensupload.php');
          }else {
             // echo "not saved";
                $_SESSION['status']="description not added";
            header('location:topbatmensupload.php');
   
          }
        }
if (isset($_POST['topbatmenspostupdatebtn']))
 {

    $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
    $post=$_POST['edit_post'];
  
    $name=$_POST['edit_name'];
       $category=$_POST['edit_category'];
       $place=$_POST['edit_place'];
       $innings=$_POST['edit_innings'];
       $totalscore=$_POST['edit_totalscore'];
       $highscore=$_POST['edit_highscore'];
       $average=$_POST['edit_average'];
       $rate=$_POST['edit_rate'];
   
  
    $query="UPDATE topbatmenspost SET heading='$username', post='$post' ,name='$name',category='$category',place='$place',innings='$innings',totalscore='$totalscore',highscore='$highscore',average='$average',rate='$rate' WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
     if($query_run)
     {
        $_SESSION['success']="Your data is updated";
        header('Location:topbatmensupload.php');
     }else
     {
      $_SESSION['status']="Your data is not updated";
        header('Location:topbatmensupload.php');
     }
   

}
if (isset($_POST['topbatsmenspost_deletbtn']))
 {
    $id=$_POST['delet_id'];
    $query="DELETE FROM topbatmenspost WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
     {
        $_SESSION['success']="Your plan is Deleted";
        header('Location:topbatmensupload.php');
     }else
     {
      $_SESSION['status']="Your plan is not Deleted";
        header('Location:topbatmensupload.php');
     }

 }
  if (isset($_POST['topbowlerspostuploadbtn'])) {
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
       $heading=$_POST['heading'];
       $post=$_POST['post'];
        $name=$_POST['name'];
       $category=$_POST['category'];
       $place=$_POST['place'];
       $innings=$_POST['innings'];
       $totalscore=$_POST['totalscore'];
       $highscore=$_POST['highscore'];
       $average=$_POST['average'];
       $rate=$_POST['rate'];
               
      
     $query="INSERT INTO  topbowlerspost (heading,post,image,name,category,place,innings,totalscore,highscore,average,rate) VALUES ('$heading','$post','$file','$name','$category','$place','$innings','$totalscore','$highscore','$average','$rate')";
         $query_run=mysqli_query($conn,$query); 
    
         if($query_run){
              //echo "saved";
            $_SESSION['success']="Description added";
            header('location:topbowlersupload.php');
          }else {
             // echo "not saved";
                $_SESSION['status']="description not added";
            header('location:topbowlersupload.php');
   
          }
        }
if (isset($_POST['topbowlerspostupdatebtn']))
 {

    $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
    $post=$_POST['edit_post'];
    $name=$_POST['edit_name'];
       $category=$_POST['edit_category'];
       $place=$_POST['edit_place'];
       $innings=$_POST['edit_innings'];
       $totalscore=$_POST['edit_totalscore'];
       $highscore=$_POST['edit_highscore'];
       $average=$_POST['edit_average'];
       $rate=$_POST['edit_rate'];
  
    $query="UPDATE topbowlerspost SET heading='$username', post='$post',name='$name',category='$category',place='$place',innings='$innings',totalscore='$totalscore',highscore='$highscore',average='$average',rate='$rate' WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
     if($query_run)
     {
        $_SESSION['success']="Your data is updated";
        header('Location:topbowlersupload.php');
     }else
     {
      $_SESSION['status']="Your data is not updated";
        header('Location:topbowlersupload.php');
     }
   

}
if (isset($_POST['topbowlerspost_deletbtn']))
 {
    $id=$_POST['delet_id'];
    $query="DELETE FROM  topbowlerspost WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
     {
        $_SESSION['success']="Your plan is Deleted";
        header('Location:topbowlersupload.php');
     }else
     {
      $_SESSION['status']="Your plan is not Deleted";
        header('Location:topbowlersupload.php');
     }

 }
 if (isset($_POST['topallrounderspostuploadbtn'])) {
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
       $heading=$_POST['heading'];
       $post=$_POST['post'];
         $name=$_POST['name'];
       $category=$_POST['category'];
       $place=$_POST['place'];
       $innings=$_POST['innings'];
       $totalscore=$_POST['totalscore'];
       $highscore=$_POST['highscore'];
       $average=$_POST['average'];
       $rate=$_POST['rate'];
       $wicket=$_POST['wicket'];
       $totalwicket=$_POST['totalwicket'];
             
         
     $query="INSERT INTO   topallrounderspost  (heading,post,image,name,category,place,innings,totalscore,highscore,average,rate,wicket,totalwicket) VALUES ('$heading','$post','$file','$name','$category','$place','$innings','$totalscore','$highscore','$average','$rate','$wicket','$totalwicket')";
         $query_run=mysqli_query($conn,$query); 
    
         if($query_run){
              //echo "saved";
            $_SESSION['success']="Description added";
            header('location:topallroundersupload.php');
          }else {
             // echo "not saved";
                $_SESSION['status']="description not added";
            header('location:topallroundersupload.php');
   
          }
        }
        if (isset($_POST['topallrounderspostupdatebtn']))
 {

    $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
    $post=$_POST['edit_post'];
  $name=$_POST['edit_name'];
       $category=$_POST['edit_category'];
       $place=$_POST['edit_place'];
       $innings=$_POST['edit_innings'];
       $totalscore=$_POST['edit_totalscore'];
       $highscore=$_POST['edit_highscore'];
       $average=$_POST['edit_average'];
       $rate=$_POST['edit_rate'];
 
    
    $query="UPDATE  topallrounderspost SET heading='$username', post='$post' ,name='$name',category='$category',place='$place',innings='$innings',totalscore='$totalscore',highscore='$highscore',average='$average',rate='$rate' WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
     if($query_run)
     {
        $_SESSION['success']="Your data is updated";
        header('Location:topallroundersupload.php');
     }else
     {
      $_SESSION['status']="Your data is not updated";
        header('Location:topallroundersupload.php');
     }
   

}
if (isset($_POST['topallrounderspost_deletbtn']))
 {
    $id=$_POST['delet_id'];
    $query="DELETE FROM  topallrounderspost WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
     {
        $_SESSION['success']="Your plan is Deleted";
        header('Location:topallroundersupload.php');
     }else
     {
      $_SESSION['status']="Your plan is not Deleted";
        header('Location:topallroundersupload.php');
     }

 }
 ?>