<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="webthemez">
<title>Coffee Shop</title>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="assets/css/styles.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/animate-custom.css" rel="stylesheet"> 
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body data-target="#navbar-main">
    
  
    
<div id="navbar-main"> 
  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
	 
      <div class="navbar-header">
	   <div class="pull-left logo">
        <a class="" href="#home"><img src="assets/img/logo.png" /></a>
       </div>
        
        </div>
       
      <!--/.nav-collapse --> 
    </div>
  </div>
</div> 
 

<!-- ==== CONTACT ==== -->
<div id="contact" name="contact">
  <div class="container">
    <div class="row">
    
    
    </div>
    <div class="row">
        
      <hr>
	 <div class="col-md-4">
	 </div>
      <div class="col-md-4">
	       
          <form id="contact" action="" method="post" class="form" role="form">
          <div class="row">
               <div class="col-md-12 form-group">
                     <?php
   include("Config.php");
   session_start();
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT * FROM admin WHERE username = '$myusername' and password = '$mypassword'";
  //    echo $sql;
      $result = mysqli_query($db,$sql);
 // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count==1) {
          $_SESSION["un"] = $myusername;
         
         header("location: welcomes.php");
      }else {
          echo  "Your Login Name or Password is invalid";
      }
   }
?>
                   <h2>  Staff Login</h2>
            </div>
            <div class="col-md-12 form-group">
              <input class="form-control" id="username" name="username" placeholder="Name" type="text" required />
            </div>
            <div class="col-md-12 form-group">
              <input class="form-control" id="password" name="password" placeholder="Password" type="password" required />
            </div>
			 <div class="col-md-12 form-group">
                             <button class="btn btn-lg pull-right" name="s" type="submit">Login...........</button>
            </div>
          </div>
           
        </form>
        <!-- form --> 
      </div>
	<div class="col-md-4">
	 </div>
    </div>
    <!-- row --> 
    
  </div>
</div>
<!-- container -->

<div id="footerwrap">
  <div class="container">
    <div class="row">
        <div class="centered"> <span class="copyright">Copyright &copy; 2017.</span> </div>
      
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="assets/js/smoothscroll.js"></script> 
<script type="text/javascript" src="assets/js/custom-scripts.js"></script>
</body>
</html>
