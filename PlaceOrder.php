

<style type="text/css">
.ui-btn {
border:1px solid #CCC !important;
}
</style><!DOCTYPE html> 
<html> 
<head> 
<title>CoffeeCafe</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="title" content="BK mobile template with mobile administrative panel.">
<meta name="keywords" content="mobile template, bk mobile template, mobile administrative template">
<meta name="description" content="This is a great mobile template.">

<!-- Links to the main header scripts to run the JQM system -->
<!-- Links to the custom styles that can be edited via the admin panel -->
<style type="text/css">

/* JQM Custom CSS */
/* 4px line at top of website, and 1px line at the bottom of the header */
.jqm-demos .jqm-header {
border-top: 4px solid #c1c1c1 !important;
border-bottom: 1px solid #8c8c8c !important;
}
.jqm-demos .jqm-header p {
position: absolute;
bottom: -2em;
left: 1em;
margin: 0;
color: #666;
font-family: 'Open Sans', sans-serif;
font-weight: 300;
text-transform: uppercase;
}

/* Footer */
.jqm-demos .jqm-footer.ui-footer {
	position: absolute;
	bottom: 0;
	padding-bottom: 0;
}
.jqm-demos .jqm-footer {
	border-top: 1px solid #838383 !important;
}
.jqm-demos .jqm-footer p {
	font-size: .8em;
	color: #000000 !important;
	font-family: 'Open Sans', sans-serif;
	font-weight: 300;
	margin: 0 1.25em 1.25em;
}
.jqm-demos .jqm-footer p:first-child {
	font-size: 1em;
	color: #000000 !important;
	font-family: 'Open Sans', sans-serif;
	font-weight: 400;
	margin: 1em 1em .75em;
}

.jqm-block-content {
margin: .5em;
padding: 1em;
background: #fff;
border: 1px solid #eee;
-webkit-border-radius: .3125em;
border-radius: .3125em;
font-family: 'Open Sans', sans-serif;
}

.jqm-block-content h3 {
font-size: 1.5em;
font-weight: 300;
color: #757575 !important;
border-bottom: 1px solid #ddd;
padding-bottom: .25em;
margin: 0 0 .5em;
}

.jqm-block-content p {
font-size: 1.1em;
font-weight: 300;
line-height: 1.4;
margin: .7em 0;
}

.jqm-block-content p:last-child {
margin-bottom: 0;
}

.jqm-block-content a:link {
font-weight: 300;
text-decoration: none;
}
 
/* stack all grids below 40em (640px) */
@media all and (max-width: 35em) {
	.my-breakpoint .ui-block-a,
	.my-breakpoint .ui-block-b,
	.my-breakpoint .ui-block-c,
	.my-breakpoint .ui-block-d,
	.my-breakpoint .ui-block-e {
		width: 100% !important;
		float: none !important;
	}
}

/*.ui-panel {
background-color:#6d6d6d !important;
}

.ui-panel h3 {
color:#fff !important;
text-shadow: none !important;
}*/
</style><!-- Links to the mobile icons used throughout the system -->
<link rel="stylesheet" href="../../../themes/jquery.mobile.icons.min.css" />
<!-- CDN link to the JQM main structure -->
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<!-- Links to the theme created/modified via themeroller -->
<link rel="stylesheet" href="../../../admin/themeroller/jqm/1.4.5/user_themes/theme1.min.css" />
<!-- CDN link to the jquery -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- CDN link to the JQM -->
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<!-- Links to the google analytics -->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'PUT YOUR ANALYTICS HERE Example: UA-xxxxxx-xx']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<script id="panel-init">
$(function() {
$( "body>[data-role='panel']" ).panel();
});
</script>

</head> 
<body> 
<?php
session_start();
?>
<div data-role="page" class="jqm-demos ui-page ui-page-theme-a ui-page-footer-fixed ui-page-active"  data-title="Coffee Cafe">

<div data-role="header" data-theme="a" style="background-color:#CC9900" class="jqm-header" role="banner" style="height:60px !important;">
<h2 class="ui-title" role="heading" aria-level="1">
<a href="" rel="external" class="ui-link" id="logo"><img src="assets/img/logo.png" border="0" width="150px" height="45px" style="height:45px !important; width:150px !important;" /></a>
</h2>
<span id="rightside"><a href="#leftpanel1" class="ui-btn ui-btn-inline ui-icon-grid ui-btn-icon-left ui-shadow" data-theme="b" data-transition="fade">Menu</a></span>
Welcome: - <?php
include ("Config.php");
      
 if(isset($_SESSION['un'])){
     $un=$_SESSION['un'];
      $sql = "SELECT * FROM users WHERE uname= '$un'";
  //    echo $sql;
      $result = mysqli_query($db,$sql);
     $fn=""; 
If (mysqli_num_rows($result) > 0) {
    if($row = mysqli_fetch_array($result)) {
$fn=$row['name']; 

}
}
     print_r($fn);
      
     } ?>
</div> 
        
<div role="main" class="ui-content">
 <div class="col-md-3"></div>
       <div class="col-md-6">
          
           <?php
           if(isset($_POST['Submit'])){
              $un=$_SESSION["un"];
      $myusername = $_POST['cfn']; 
       $size = $_POST['cfsize']; 
        $qty = $_POST['qty']; 
         $address = $_POST['address'];
         
          
          $sql1 = "SELECT  price FROM coffees where cfname='$myusername' and size='$size'";
  // echo $sql1;
      $result1 = mysqli_query($db,$sql1);
   
If (mysqli_num_rows($result1) > 0) {
     if ($row = mysqli_fetch_array($result1)) {
         $sp=$row["price"];
         $tsp=$sp*$qty;
     }
     
     }
     $sql = "insert into orders(cname,coffeetype,quantity,size,address,price,odatetime,deliveres) values('$un','$myusername',$qty,'$size','$address',$tsp,now(),'Not Delivered')";
     // echo $sql;
      $result = mysqli_query($db,$sql);
   // $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      
       echo 'Order Placed successfully.';
      
           }
           ?>
	Place New Order
        <form method="post" action="">
            <table data-role="table" data-mode="columntoggle" class="ui-responsive" id="myTable">
  <thead>
    <tr>
     
                <th><select name="cfn"><option>Select Coffee</option>
                        <?php
  $mn="";
     
      $sql1 = "SELECT distinct cfname FROM coffees";
  //    echo $sql;
      $result1 = mysqli_query($db,$sql1);
      
If (mysqli_num_rows($result1) > 0) {
     while ($row = mysqli_fetch_array($result1)) {
    $id=$row['cid'];
        ?>
                        <option><?php echo $row['cfname']; ?></option>
                        <?php
                        }}
                        ?>
            </select></th>
       
    </tr>
  </thead>
  
       <tbody>
           <tr> 
               <td> <select name="cfsize">  <option>Select Size</option>
                       <option>Small</option>
                       <option>Tall</option>
           </select> </td>
      
        </tr>
         <tr> 
               <td> 
                   <input type="number" required="" placeholder="Enter Quantity" name="qty"></td>
      
        </tr>
        
         <tr> 
              
      
        </tr>
        <tr> 
               <td> 
                 <div class="col-md-12 form-group">
              <textarea class="form-control" id="address" name="address" placeholder="Address" rows="5"></textarea>             
              <button name="Submit" class="btn btn-lg pull-left" type="submit">Place Order</button>
            </div>
</td>
      
        </tr>
  </tbody>
  </form>
  
  
            </table>
      </div>
	   <div class="col-md-3"></div>
   
    
 
         
		
</div><!-- /content -->

<div data-role="footer" data-position="fixed" data-tap-toggle="false"  style="background-color:#CC9900" class="jqm-footer">
<p class="f1">CoffeeCafe</p>
<p class="f2">Copyright 2017</p>
</div><!-- /footer -->

</div><!-- /page -->

<style type="text/css">
#panel-style li {
margin-bottom:-9px;
}
</style>

<div data-role="panel" style="background-color: #e4b9c0" id="leftpanel1" data-position="left" data-display="overlay" data-theme="a">
<h3>Menu</h3>

<ul data-role="listview" id="panel-style" style="width:100% !important; padding-left:0; margin-left:0;">
<li><a href="welcomec.php" data-inline="true" class="ui-btn" data-transition="fade" title="Home"><span style="font-size:16px;">Profile</span></a></li>
<li><a href="PlaceOrder.php" data-inline="true" class="ui-btn" data-transition="fade" title="View All Order" rel="external"><span style="font-size:16px;">Place Order</span></a></li>
<li><a href="ViewOrder.php" data-inline="true" class="ui-btn" data-transition="fade" title="View All Order" rel="external"><span style="font-size:16px;">View All Order</span></a></li>
<li><a href="logout.php" data-inline="true" class="ui-btn" data-transition="fade" title="Logout" rel="external"><span style="font-size:16px;">Logout</span></a></li>
       

</ul>

<div align="center">
<a href="#demo-links" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ui-btn-inline">Close Menu</a>
</div>

</div><!-- /leftpanel1 -->
</body>
</html>