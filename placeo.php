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
             session_start();
              
        ?>
        <?php  
        
    
            echo $_POST["cfn"];
          
     /*     $sql1 = "SELECT  price FROM coffees where cfname='$myusername' and size='$size'";
   echo $sql1;
   /*   $result1 = mysqli_query($db,$sql1);
   
If (mysqli_num_rows($result1) > 0) {
     if ($row = mysqli_fetch_array($result1)) {
         $sp=$row["price"];
         $tsp=$sp*$qty;
         echo $tsp;
        
     }
     
     }
 /*    $sql = "insert into orders values('$un','$myusername','$qty','$size','$address','$tsp','Not Delivered')";
      echo $sql;
      $result = mysqli_query($db,$sql);
    $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count==1) {
        
         header("location: ViewOrder.php");
      } 
       header("location: ViewOrder.php");*/
        ?>
    </body>
</html>
