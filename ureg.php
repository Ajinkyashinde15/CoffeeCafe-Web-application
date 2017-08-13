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
         $pass = md5($_POST['password']); 
      
     
      $sql = "update users set name='$myusername',email='$email',phone='$phone',address='$address',password='$pass' where uname='$un'";
  //    echo $sql;
      $result = mysqli_query($db,$sql);
    $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      
       header("location welcomec.php");
          
?>
    </body>
</html>
