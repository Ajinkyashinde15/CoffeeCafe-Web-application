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
   
       // username and password sent from form 
      
      $myusername = $_GET['id']; 
      
      $sql = "update  orders set deliveres='Delivered' WHERE oid = '$myusername'";
  //    echo $sql;
      $result = mysqli_query($db,$sql);
 // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count==1) {
        
         header("location: welcomes.php");
      } 
       header("location: welcomes.php");
?>
    </body>
</html>
