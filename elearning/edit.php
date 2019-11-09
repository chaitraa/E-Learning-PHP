
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
 .mybtn
 {
    margin-left:110px;
	
 }
 .copyrite
 {
        margin-top:20px;
       font-family:"Bookman Old Style";
	   font-size:16px;  
       text-align:center;
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
    margin-left:230px;
	margin-top:40px;
    height:125px;
    width:55%;
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
   -webkit-transition: width 0.3s; /*Safari & Chrome*/
   transition: width 3s;
   -moz-transition: width 0.3s; /* Firefox 4 */
   -o-transition: width 0.3s; /* Opera */
   }
.profile
{ 
   width:150px;
   float:right;
   margin-top:-2px;
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
   width:55%;
   background:#B8C6E5;
   border-bottom-right-radius:20px;
   border-bottom-left-radius:20px;
   margin-left:230px;
}
.flat-table
 {
  font-family:"Comic Sans MS";
  -webkit-font-smoothing: antialiased;
  font-size: 115%;
  margin-left:50px;
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
    font-size:x-large;
    text-shadow: 1px 0px 20px red;
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
  input[type="image"]
  { 
   float:right;
   margin-right:8px;
   border-radius:30px;
  }
     </style>
</head>
<body>
<!--E-Learning tutorial menu open-->
<div class="wrap">
<div class="wrapper">
<div class="logo">
	 <h1>Tute</h1>
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
          <div class="user"><h1><?php echo $_SESSION['name'];?></h1></div>
	</div>
	<div class="profbody"> 
      <br>
	  <form method="post" action="update_user.php" enctype="multipart/form-data">
	     <input type="hidden" name="old_pic"  value="<?php echo $_SESSION['pic'];?>">
         <table class="flat-table" width="75%" border="0">
		 <tr>
            <td height="40" ><h2>SEM</h2></td>
            <td><select name="sem">
                           <option value="FIRST">FIRST</option>
                           <option value="SECOND">SECOND</option>
                           <option value="THIRD">THIRD</option>
                           <option value="FOURTH">FOURTH</option>
                           <option value="FIFTH">FIFTH</option>
                           <option value="SIXTH">SIXTH</option>
                         </select>     </td>
          </tr>
		  <tr>
            <td height="40"><h2>MOBILE NO</h2></td>
            <td><input type="text" id="logintxt" name="mobile" placeholder="MOBILE NO" required="required"  value="<?php echo $_SESSION['phno'];?>"/></td>
          </tr>
		  <tr>
            <td height="40"><h2>EMAIL</h2></td>
            <td><input type="email" id="logintxt" name="email" placeholder="EMAIL" required="required" value="<?php echo $_SESSION['email'];?>"/></td>
           </tr>
          
           <tr>
            <td width="164" height="40"><h2>PROFILE PIC</h2></td>
            <td width="311"><input type="file" id="loginfile" name="profile" placeholder="PROFILE PIC"/>
			<input type="hidden" name="old_pic"  value="<?php echo $_SESSION['pic'];?>"></td>
          </tr>
		  <tr>
             <td height="40"><h2>PASSWORD</h2></td>
            <td><input type="password" id="logintxt" name="password" value="<?php echo $_SESSION['pswd'];?>"/></td>
          </tr>
		  <tr>
             <td height="93" colspan="2">
			     <table class="mybtn" width="50%" border="0" align="center">
                       <tr>
                             <td><input type="image" src="web/images/update.png" alt="Submit" height="60px" width="180px" > </td>
                       </tr>
                 </table>
             </td>
          </tr>
       </table>
	  	</form>
	  
	</div>
    </div>
  </div>
 
</div>
</div>
</div>
<div class="bottom">
        		<p class="copyrite" >E-Learning | &copy; 2016</p>
		</div>
</body>
</html>
   <?php
  }
?>