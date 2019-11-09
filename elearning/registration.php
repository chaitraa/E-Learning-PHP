<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
      
	  
	  
	  
	  <style>
	  table
	  {
	  	background:url(web/images/tbl1.jpg) no-repeat ;
		border-radius:30px;
		background-size:950px;
		
	  }
.style3 {color: #FFFFFF; font-weight: bold; }
.style-login
{
              font-weight: bold; 
              font-family: "Lucida Calligraphy"
			  font-size: 20px;
	       	  color: rgb(164, 175, 32);
			 }


.style5 {
	color: #660000;
	font-weight: bold;
	font-family: "Comic Sans MS";
	font-size: 24px;
}

	.submot_btn
	{
		width:120px;
		height:30px;
		background-color:rgb(164, 175, 32);
		color:#FFFFFF;border-radius:5px;
	}
.style8 {
	font-family: "Bookman Old Style";
	font-weight: bold;
	font-size: 18px;
	color: #FF0000;
}
#regtxt{
	text-align:left;
	position: relative;
	width:75%;
	padding:3px;
	background:#D3D3D3;
	font-family: 'Open Sans', sans-serif;
	color: #676767;
	font-weight:600;
	font-size: 16px;
	outline: none;
	border: none;
	border-radius: 5px;
	border:1px solid #DED6D6;
	-webkit-appearance:none;

}
 #regtxt:hover{
 	border:1px solid #949494;
	transition:0.5s;
	-webkit-transition:0.5s;
	-moz-transition:0.5s;
	-o-transition:0.5s;
	-ms-transition:	0.5s;
 	
 }
      </style>
</head>
<body>
<div class="wrap">
<div class="wrapper">
<div class="logo">
	<a href="index.php"><h1>Tute</h1></a>
</div>
<div class="header_right">
	<div class="cssmenu">
		<ul>
		  	<li class="has-sub"><a href="index.php"><span>Home</span></a></li>
			<li><a href="login.php"><span>Login</span></a></li>
			<li class="active"><a href="registration.php"><span>Registration</span></a></li>
			<li class="last"><a href="contact.php"><span>Contact</span></a></li>
			<div class="clear"></div>
		 </ul>
	</div>
</div>
	<div class="clear"></div>
</div>
</div>
<div align="center">
<form action="store.php" method="post" enctype="multipart/form-data">
 <table id="reg" width="71%" height="562" border="0" cellpadding="2" cellspacing="2" rules="rows">
                   <tr>
                     <td height="19" colspan="5" align="center">&nbsp;</td>
                   </tr>
                   <tr>
                     <td height="29" colspan="5" align="center"><h1 class="style5 ">REGISTRATION </h1></td>
                   </tr>
                   <tr>
                     <td height="19" colspan="5" align="center">&nbsp;</td>
                   </tr>
                   <tr>
                     <td width="6%" height="36">&nbsp;</td>
                     <td width="19%"><span class="style3">FIRST NAME  </span></td>
                     <td width="28%"><input name="fn" type="text" size="25" placeholder="FIRST NAME" required /></td>
                    <td width="22%"><span class="style3">FATHER NAME </span></td>
                     <td width="25%">
                     <input name="father" type="text" size="25" placeholder="FATHER NAME" required="required"/> </td> 
                   </tr>
                   <tr>
                     <td>&nbsp;</td>
					 <td width="19%"><span class="style3">LAST NAME </span></td>
                     <td width="28%">
                     <input name="ln" type="text" size="25" placeholder="LAST NAME" required="required"/>                     </td>
                     
                     <td height="36"><span class="style3">MOTHER NAME </span></td>
                     <td>
                         <input name="mother" type="text" size="25" placeholder="MOTHER NAME" required="required"/>                     </td>
                   </tr>
                   <tr>
                     <td height="33">&nbsp;</td>
                     <td><span class="style3">D O B </span></td>
                     <td>
                         <input type="text" name="dob" placeholder="(DD/MM/YYYY)" required="required" />                     </td>
                     <td height="33"><span class="style3">COURSE</span></td>
                     <td>
                         <select name="course">
                           <option value="MCA" >MCA</option>
                           <option value="MSc" >MSc</option>
                           <option value="MTech" >MTech</option>
                         </select>                     </td>
                   </tr>
                   <tr>
                     <td>&nbsp;</td>
					 <td><span class="style3">GENDER</span></td>
                     <td><input name="gender" type="radio" value="MALE"/>
                       <span class="style3">MALE</span>
                       <input name="gender" type="radio" value="FEMALE">
                     <span class="style3">FEMALE</span></td>
                      <td><span class="style3">SEM</span></td>
                     <td>
                         <select name="sem">
                           <option value="FIRST">FIRST</option>
                           <option value="SECOND">SECOND</option>
                           <option value="THIRD">THIRD</option>
                           <option value="FOURTH">FOURTH</option>
                           <option value="FIFTH">FIFTH</option>
                           <option value="SIXTH">SIXTH</option>
                         </select>                    </td>
      </tr>
                   <tr>
                     <td height="38">&nbsp;</td>
                     <td><span class="style3">ADDRESS</span></td>
                     <td><textarea name="addr" id="regtxt" cols="25" placeholder="ADDRESS" required="required"></textarea>           </td>
                     <td><span class="style3">REGISTER NUMBER </span></td>
                     <td>
                         <input name="reg" type="text" size="25" placeholder="REGISTER NO" required="required"/>                     </td>
                   </tr>
                   <tr>
                     <td height="35">&nbsp;</td>
                     <td><span class="style3">CITY</span></td>
                     <td><input name="city" type="text" size="25" placeholder="CITY" required="required"/>                     </td>
                     <td colspan="2" align="center"><span class=".style-login style8">LOGIN DETAILS </span></td>
                   </tr>
                   <tr>
                     <td>&nbsp;</td>
                     <td><span class="style3">PIN CODE </span></td>
                     <td><input name="pin" type="text" size="25" placeholder="PIN CODE" required="required"/></td>
                     <td><span class="style3">USER NAME </span></td>
                     <td>
                         <input type="text" name="username" placeholder="USER NAME" required="required" />                     </td>
                   </tr>
                   <tr>
                     <td>&nbsp;</td>
                     <td><span class="style3">MOBILE NUMBER </span></td>
                     <td><input name="phno" type="text" size="25" placeholder="MOBILE NUMBER" required="required"/>                     </td>
                     <td><span class="style3">PASSWORD</span></td>
                     <td>
                         <input name="pw" type="password" size="25" placeholder="PASSWORD" required="required"/>                     </td>
                   </tr>
                   <tr>
                     <td height="38">&nbsp;</td>
                     <td><span class="style3">EMAIL ID </span></td>
                     <td><input type="email" name="email" placeholder="EMAIL ADDRESS" required="required" />                     </td>
                     <td><span class="style3">CONFIRM PASSWORD</span></td>
                    <td> <input name="cpw" type="password" size="25" placeholder="CONFIRM PASSWORD" required="required"/>                     </td>
                   </tr>
                   <tr>
                     <td height="24">&nbsp;</td>
                     <td><span class="style3">PROFILE PHOTO </span></td>
                     <td><input type="file" name="profile" /></td>
                     <td align="center">&nbsp;</td>
                     <td >&nbsp;</td>
                   </tr>
				   <tr>
                     <td height="38">&nbsp;</td>
                     <td>&nbsp;</td>
                     <td align="center"><input name="submit" type="submit" value="REGISTER" /></td>
                     <td ><input name="reset" type="reset" value="CLEAR" /></td>
                     <td >&nbsp;</td>
                   </tr>
                   <tr>
                     <td colspan="5">&nbsp;</td>
                   </tr>
    </table>
  
</form>
</div>

</body>
</html>

