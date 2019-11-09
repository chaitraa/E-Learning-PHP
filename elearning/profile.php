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
 <style>
 .copyrite
 {
        margin-top:20px;
       font-family:"Bookman Old Style";
	   font-size:16px;  
       text-align:center;
  }
 .bottom
{ 
  width:100%;
  height:50px;
  background:#F7DA55;
  }
 .edit
{ 
   float:right;
   margin-right:10px;
   border-radius:20px;
  }
.main
{
  padding-left:10px;
  padding-right:10px;
  width:100%;
  background-color:#F7DA55;
}
.profhead
{
    margin-left:100px;
    height:125px;
    width:80%;
    background:#304674;
    border-top-right-radius:30px;
    border-top-left-radius:30px;
 /*  #F7DA55;*/
}
.name
{
  float:left;
  width:500px;
  height:100px;
}
 .name h1
 {
  text-shadow: 3px 3px 5px yellow;
  text-margin-left:25px;
  margin:20px;
  float:left;
  width:500px;
  height:100px;
  text-align:center;
  font-size:72px;
  font-family:"Bookman Old Style";
  color:#21A957;
  text-transform:uppercase;
 }
.name:hover, .name:focus, .name:active 
 {
   -webkit-stroke-width: 3px;
   -webkit-stroke-color: #FFFFFF;
   -webkit-fill-color: #FFFFFF;
   text-shadow: 1px 0px 20px yellow;
   -webkit-transition: width 0.3s; 
   transition: width 3s;
   -moz-transition: width 0.3s; 
   -o-transition: width 0.3s; 
   }
.profile
{ 
   width:150px;
   float:right;
   margin-top:7px;
   margin-right:8px;
   border-radius:10px;
} 
.profilepic
{ 
   -moz-box-shadow: 1 0 5px #66CCFF;
  -webkit-box-shadow: 0 0 5px #66CCFF;
   box-shadow: 5px 2px 5px #66CCFF;
   float:right;
   margin-right:10px;
   border-radius:10px;
  }
.profbody
{
   height:90%;
    width:80%;
   background:#B8C6E5;
   border-bottom-right-radius:20px;
   border-bottom-left-radius:20px;
   margin-left: 100px;
}
.flat-table
 {
  font-family:"Comic Sans MS";
  -webkit-font-smoothing: antialiased;
  font-size: 115%;
  margin-left:50px;
  width: auto;
  font-weight: bold;
  border-top-left-radius:20px;
  border-top-right-radius:20px;
  }
  .flat-table td h3
  {
    font-size:x-large;
    color: white;
	text-shadow: 1px 0px 20px black;
    font-weight: normal;
    text-align: left;
  }
  .flat-table td h2
  {
    font-size:xx-large;
   	color: #000000;
	font-weight: bold;
	font-family:"Bookman Old Style";
	text-align:left; 
  }
   .heading
  {
    background-color:#F7DA55;
	width:100%;
	height:150px;
}
  .heading  h1
  {
   	font-family:"Times New Roman", Times, serif;
	letter-spacing:0px;
	text-align:center;
	font-size: 5.5em;
	color: #21A957;
	text-transform: capitalize;
   }
     </style>
</head>
<body>
<!--E-Learning menu open-->
<div class="wrap">
<div class="wrapper">
<div class="elearn">
   <h3>Tute</h3>
</div>
<div class="header_right">
	<div class="cssmenu">
		<ul>
		        <li class="active"><a href="profile.php"><span>Profile</span></a></li>
		     	<li ><a href="elearning.php"><span>E-Learning</span></a></li>
			    <li class="last"><a href="logout.php"><span>Logout</span></a></li>
		</ul>
		<div class="clear"></div>
	</div>
</div>
	<div class="clear"></div>
</div>
</div>
<!--E-Learning menu close-->
<div class="main_bg">
<div class="wrap">
<div class="wrapper">
    <div class="profhead">
  <div class="user"><h3><?php echo $_SESSION['name'];?></h3></div>
	   <div class="profile"> <img class="profilepic" src="profile_upload/<?php echo $_SESSION['pic'];?>" height="110px" width="110px" /> <!--<img class="profilepic" src="images/p-3.jpg" height="110px" width="110px"/>--> </div>
  </div><!--prof head close-->
	<div class="profbody"> 
      <br>
         <table class="flat-table" width="640" height="421" border="0" align="center">
           <tr>
            <td width="212" height="40"><h3>DATE OF BIRTH </h3></td>
            <td width="374"><h2><?PHP echo $_SESSION['dob'];?></h2></td>
          <tr>
          </tr>
            <td height="40"><h3>GENDER</h3></td>
            <td><h2><?PHP echo $_SESSION['gender'];?></h2></td>
          </tr>
          <tr>
            <td height="40"><h3>COURSE</h3></td>
            <td><h2 ><?PHP echo $_SESSION['course'];?></h2></td>
           </tr>
          <tr>
            <td height="40"><h3>SEM</h3></td>
            <td><h2 ><?PHP echo $_SESSION['sem'];?></h2></td>
          </tr>
          <tr>
            <td height="40" ><h3>REGISTER NO </h3></td>
            <td><h2 ><?PHP echo $_SESSION['reg'];?></h2></td>
          </tr>
          <tr>
            <td height="40"><h3>PHONE NUMBER </h3></td>
            <td><h2 ><?PHP echo $_SESSION['phno'];?></h2></td>
          </tr>
          <tr>
            <td height="40"><h3>EMAIL</h3></td>
            <td ><h2 ><?PHP echo $_SESSION['email'];?></h2></td>
          </tr>
		   <tr>
            <td height="40" colspan="2"><a href="edit.php"><img class="edit" src="web/images/edit.jpg" height="35px" width="100px"/></a></td>
           </tr>
      </table>
	</div><!--prof body close-->
      </div>
  </div>
 
</div>
</div>
</div>
<!--<div class="bottom">-->
        <div class="bottom">
        		<p class="copyrite" >E-Learning | &copy; 2016</p>
		</div><!--/*</div>*/-->
</body>
</html>
   <?php
  }
?>