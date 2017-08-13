<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
        include("Config.php");
    session_start();
       // username and password sent from form 
      
      $myusername = $_POST['name']; 
       $email = $_POST['email']; 
        $phone = $_POST['phone']; 
         $address = $_POST['address'];
         
        $un = $_POST['uname']; 
      //   $pass = crypt($_POST['password']); 
     $salt = "mypass";
      $pass = crypt($_POST['password'],$salt); 
   
         $cq="select * from  users where uname='$un'";
          $result = mysqli_query($db,$cq);
    $count = mysqli_num_rows($result);
         if($count>0)
         {
           $_SESSION['err'] = "Username already exist.";
           header("location: index.php#about");
         }
         else{
      $sql = "insert into users values('$myusername','$email','$phone','$address','$un','$pass')";
  //    echo $sql;
      $result = mysqli_query($db,$sql);
    $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count==1) {
        
         header("location: index.php#services");
      } 
       header("location: index.php");
         }
?>
    </body>
</html>
