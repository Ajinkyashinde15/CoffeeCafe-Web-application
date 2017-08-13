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
<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
 
</head>
<body data-target="#navbar-main">
     <? php
       session_start();
      
       ?>
<div id="navbar-main"> 
  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
	 
      <div class="navbar-header">
	   <div class="pull-left logo">
        <a class="" href="#home"><img src="assets/img/logo.png" /></a>
       </div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right">
          <li><a href="#home-section" class="smoothScroll">Welcome</a></li>
          <li> <a href="#services" class="smoothScroll">Login</a></li>		  
          <li> <a href="#about" class="smoothScroll">Register</a></li>
          <li> <a href="#portfolio" class="smoothScroll"> Special</a></li> 
         </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
  </div>
</div>

<!-- ==== HEADERWRAP ==== -->
<div id="home-section">
<div id="headerwrap" name="home">
  <header class="clearfix tb"> 
 <div class="tb-cell text-center">
 <i class="fa fa-heart-o icon"></i>
    <h1>Coffee - Makes you Love</h1>
    <p>A Lot Can Happen Over Coffee, Its Awesome!!! </p>
    <a href="#portfolio" class="smoothScroll btn btn-lg">Today's Special</a> 
	</div>
	</header>
</div>

</div>
<div class="div-pattern2"></div>
<!-- /headerwrap --> 



<!-- ==== SERVICES ==== -->
<div id="services" name="contact">
  <div class="container">
    <div class="row">
    
      <h2> Login</h2>
    </div>
    <div class="row">
        
      <hr>
	 <div class="col-md-4">
	 </div>
      <div class="col-md-4">
	       
          <form id="contact" action="" method="post" class="form" role="form">
          <div class="row">
               <div class="col-md-12 form-group">
                     
                   <?php session_start();

if(isset($_POST['Submit'])){
	// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		
            $msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.
           
	}else{// Captcha verification is Correct. Final Code Execute here!		
	 include("Config.php"); 
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $salt = "mypass";

      $mypassword = crypt($_POST['password'],$salt); 
     
      $sql = "SELECT * FROM users WHERE uname = '$myusername' and password = '$mypassword'";
  //    echo $sql;
      $result = mysqli_query($db,$sql);
 // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count==1) {
          $_SESSION['un'] = $myusername;
         
         header("location: welcomec.php");
      }else {
          echo  "Your Login Name or Password is invalid";
      }
   }	
            $msg="<span style='color:green'>The Validation code has been matched.</span>";		
	}
}	
?>
                  
                 
            </div>
            <div class="col-md-12 form-group">
              <input class="form-control" id="username" name="username" placeholder="Name" type="text" required />
            </div>
            <div class="col-md-12 form-group">
              <input class="form-control" id="password" name="password" placeholder="Password" type="password" required />
            </div>
              
              <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td align="right" valign="top"> Captcha:</td>
      <td><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        <label for='message'>Enter the code above here :</label>
        <br>
        <input id="captcha_code" name="captcha_code" type="text">
        <br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
    </tr>
     
  </table>

			 <div class="col-md-12 form-group">
                             <button class="btn btn-lg pull-right" name="Submit" type="submit">Login...........</button>
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
 
<!-- ==== ABOUT ==== -->
<div id="about" name="about">
  <div class="container">
    <div class="row white">
      <h2 class="centered">Register</h2>
     
      <?php
     if(isset($_SESSION['err'])){
     print_r($_SESSION["err"]);
     $_SESSION['err']="";
     }
?>
      <hr>
      <div class="col-md-6"> <img class="img-responsive" src="assets/img/about/about1.jpg" align=""> </div>
      <div class="col-md-6">
	  Register before palce order
          <form id="contact" method="post" action="reg.php"  role="form">
          <div class="row">
            <div class="col-md-12 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required />
            </div>
            <div class="col-md-12 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
            </div>
			 <div class="col-md-12 form-group">
              <input class="form-control" id="phone" name="phone" pattern="\d{10}" placeholder="Phone Number(9999999999)" type="tel" required />
            </div>
               <div class="col-md-12 form-group">
              <input class="form-control" id="name" name="uname" placeholder="Provide User Name" type="text" required />
            </div>
            <div class="col-md-12 form-group">
              <input class="form-control" id="email" name="password" placeholder="Provide Password" type="password" required />
            </div>
			 <div class="col-md-12 form-group">
              <textarea class="form-control" id="message" name="address" placeholder="Address" rows="5"></textarea>             
              <button class="btn btn-lg pull-left" type="submit">Register</button>
            </div>
          </div>
           
        </form>
      </div>
    </div>
    <!-- row --> 
  </div>
</div>
<!-- container --> 
<!-- ==== PORTFOLIO ==== -->
<div id="portfolio" name="portfolio">
  <div class="container">
    <div class="row">
      <h2 class="centered">What Special</h2>
      <hr>
     
    </div>
    <!-- /row -->
    <div class="container">
      <div class="row"> 
        
        <!-- PORTFOLIO IMAGE 1 -->
        <div class="col-md-4 ">
          <div class="grid overlay">
            <figure> <img class="img-responsive" src="assets/img/portfolio/folio01.jpg" alt="">
              <figcaption>
                <h5>Coco Cake</h5>
                 </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-overlay --> 
        </div> 
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/portfolio/folio01-preview.jpg" alt=""></p>
                
              </div> 
            </div>
            <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
        </div>
        <!-- /.modal --> 
        
        <!-- PORTFOLIO IMAGE 2 -->
        <div class="col-md-4">
          <div class="grid overlay">
            <figure> <img class="img-responsive" src="assets/img/portfolio/folio02.jpg" alt="">
              <figcaption>
                <h5>Rose Cake</h5>
              </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-overlay --> 
        </div>
        
        <!-- PORTFOLIO IMAGE 3 -->
        <div class="col-md-4">
          <div class="grid overlay">
            <figure> <img class="img-responsive" src="assets/img/portfolio/folio03.jpg" alt="">
              <figcaption>
                <h5>Cookies</h5>
 </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-overlay --> 
        </div>
      </div>
      <!-- /row --> 
      
      <!-- PORTFOLIO IMAGE 4 -->
      <div class="row">
        <div class="col-md-4 ">
          <div class="grid overlay">
            <figure> <img class="img-responsive" src="assets/img/portfolio/folio04.jpg" alt="">
              <figcaption>
                <h5>Green Tea</h5>
 </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-overlay --> 
        </div>
        
        <!-- PORTFOLIO IMAGE 5 -->
        <div class="col-md-4">
          <div class="grid overlay">
            <figure> <img class="img-responsive" src="assets/img/portfolio/folio05.jpg" alt="">
              <figcaption>
                <h5>Tea</h5>
 </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-overlay --> 
        </div>
        
        <!-- PORTFOLIO IMAGE 6 -->
        <div class="col-md-4">
          <div class="grid overlay">
            <figure> <img class="img-responsive" src="assets/img/portfolio/folio06.jpg" alt="">
              <figcaption>
                <h5>Cappuccino</h5>
</figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-overlay --> 
        </div>
        <!-- /col --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /row --> 
  </div>
</div>
<!-- /container --> 
 
 

<div id="footerwrap">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> <span class="copyright">Copyright &copy; 2017. Design by Me</span> </div>
       
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
