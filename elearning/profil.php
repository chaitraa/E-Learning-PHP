<?php
ob_start();
session_start();
      if($_SESSION['un']=="")
	 {
	 	header('location:login.php');
	 }
	 else
	 {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="web/css/camera.css" rel="stylesheet" type="text/css" media="all" />
    <script type='text/javascript' src="web/js/jquery.min.js"></script>
    <script type='text/javascript' src="web/js/jquery.mobile.customized.min.js"></script>
    <script type='text/javascript' src="web/js/jquery.easing.1.3.js"></script> 
    <script type='text/javascript' src="web/js/camera.min.js"></script> 
  	</script>
    <style type="text/css">
<!--
.style1 {color: #0000FF}
.style2 {font-family: "Bookman Old Style"}
.style3 {font-family: "Comic Sans MS"}
.style4 {font-family: "Comic Sans MS"; color: #FF00FF; }
.style5 {font-family: "Comic Sans MS"; color: #0000FF; }
-->
    </style>
</head>
<body>
<div class="wrap">
<div class="wrapper">
<div class="logo">
	 <h1>E-Learning</h1>
</div>
<div class="header_right">
	<div class="cssmenu">
		<ul>
		        <li class="active"><a href="profile.php"><span>Profile</span></a></li>
		     	<li ><a href="elearning.php"><span>E-Learning</span></a></li>
			    <li class="last"><a href="logout.php"><span>Logout</span></a></li>
			<div class="clear"></div>
	    </ul>
	</div>
</div>
	<div class="clear"></div>
</div>
</div>
 <div class="main_bg">
<div class="wrap">
<div class="wrapper">
  <div class="main_text">
    
    <div class="main">
      <div class="clear">
        <style type="text/css">
<!--
img
{

}
.style1 {color: #0000FF}
.style2 {
	color: #FF0000;
	font-family: "Courier New", Courier, monospace;
}
.style3 {font-family: Arial, Helvetica, sans-serif}
.style5 {color: #0000FF; font-family: Arial, Helvetica, sans-serif; }
.style20 {color: #00CC66; font-family: "Bookman Old Style";}
.style21 {color: #00CC66}
.style22 {
	font-family: "Comic Sans MS";
	font-size: 18px;
	color: #993333;
}
.style24 {color: #6633CC; font-family: "Lucida Calligraphy"; font-size: 20px;}
-->
        </style>
        <table width="688" border="0" align="center">
          <tr>
            <td width="222"><?PHP echo '<h2 class="style22"> Welcome</h2>';?></td>
            <td width="248"><?PHP echo '<h2  class="style24">'.$_SESSION['name'];?></td>
          </tr>
        </table>
        <table width="688" height="421" border="0" align="center">
          <tr>
            <td width="184" height="39" class="style5"><h3>NAME</h3></td>
            <td width="289"><h2 class="style4"><?PHP echo  $_SESSION['name'];?></h2></td>
            <td colspan="2" rowspan="4"><?PHP echo '<img src="profile_upload/'.$_SESSION['pic'].'"height"75" width="75" alt="'.$_SESSION['pic'].'"/>'; ?></td>
          </tr>
          <tr>
            <td height="40" class="style5"><h3 >FATHER</h3></td>
            <td><h2 class="style4"><?PHP echo $_SESSION['father'];?></h2></td>
          </tr>
          <tr>
            <td height="40" class="style5"><h3>MOTHER</h3></td>
            <td><h2 class="style4"><?PHP echo $_SESSION['mother'];?></h2></td>
          </tr>
          <tr>
            <td height="40" class="style5"><h3>DATE OF BIRTH </h3></td>
            <td><h2 class="style4"><?PHP echo $_SESSION['dob'];?></h2></td>
          </tr>
          <tr>
            <td height="40" class="style5"><h3>GENDER</h3></td>
            <td><h2 class="style4"><?PHP echo $_SESSION['gender'];?></h2></td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td height="40" class="style5"><h3>COURSE</h3></td>
            <td><h2 class="style4"><?PHP echo $_SESSION['course'];?></h2></td>
            <td width="54" class="style5"><h3>SEM</h3></td>
            <td width="143" class="style20"><h3><?PHP echo $_SESSION['sem'];?></h3></td>
          </tr>
          <tr>
            <td height="40" class="style5"><h3>REGISTER NO </h3></td>
            <td><h2 class="style4"><?PHP echo $_SESSION['reg'];?></h2></td>
            <td colspan="2" rowspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td height="40" class="style5"><h3>PHONE NUMBER </h3></td>
            <td><h2 class="style4"><?PHP echo $_SESSION['phno'];?></h2></td>
          </tr>
          <tr>
            <td height="40" class="style5"><h3 class="style1">EMAIL</h3></td>
            <td ><h2 class="style4"><?PHP echo $_SESSION['email'];?></h2></td>
          </tr>
        </table>
      </div>
    </div>
    </div>
  <div class="grids_1_of_4">
    <div class="clear"></div>
  </div>
</div>
</div>
</div>
<div class="wrap">
<div class="wrapper">
	<div class="footer">
		<div class="social-icons">
	   		  	<ul>
			      <li class="icon_1"><a href="#" target="_blank"> </a></li>
			      <li class="icon_2"><a href="#" target="_blank"> </a></li>
			      <li class="icon_3"><a href="#" target="_blank"> </a></li>
			      <li class="icon_4"><a href="#" target="_blank"> </a></li>
			      <div class="clear"></div>
		     </ul>
   	  </div>
		<div class="copy">
			<p class="w3-link">E-Learning | &copy; 2015</p>
		</div>
	</div>
</div>
<div class="clear"></div>
</div>
</body>
</html>
 <?php
   }
   ?>