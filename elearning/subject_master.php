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
<!--<link href="web/css/login.css" rel="stylesheet" type="text/css" media="all" />-->
<style>
.text1
{
  font-family:"Comic Sans MS";
  font-size:20px;
  padding-left:50px;
}
.text
{
  font-family:"Comic Sans MS";
  font-size:20px;
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
		    <li class="has-sub"><a href="user_list.php"><span>USERS</span></a></li>
			<li class="active"><a href="subject_master.php"><span>SUBJECTS</span></a></li>
			<li class="has-sub"><a href="notesupload.php"><span>UPLOAD</span></a></li>
			<li class="has-sub"><a href="List_of_notes.php"><span>NOTES</span></a></li>
			<li class="last"><a href="admin_logout.php"><span>LOGOUT</span></a></li>
			<div class="clear"></div>
		 </ul>
	</div>
</div>
	<div class="clear"></div>
</div>
</div>
   <div class="clear"></div>
<div class="wrap">
<div class="wrapper"></div>
</div>
<div class="main_bg">
<div class="wrap">
<div class="wrapper">
	<div class="main">
		<div id="form_design" style="background-color:#D4E7F5;width:620px; border-radius:20px; position:center; ">
			     <form action="subject_process.php" method="post" enctype="multipart/form-data">
				  
				   <table width="414" border="0" cellpadding="5" cellspacing="10" align="center">
				     <tr>
				       <td class="text"  align="left">SUBJECT</td>
			         </tr>
				     <tr>
			           <td width="394" align="center"><input type="text" name="subject" placeholder="SUBJECT" size="20"/></td>
                     </tr>
				     <tr>
				       <td class="text"  height="29" align="left"><label>LOGO UPLOAD</label></td>
			         </tr>
				     <tr>
				          <td align="center" ><input type="File" name="logo" class="text1" /></td>
                     </tr>
					 <tr>
				          <td align="center">&nbsp;</td>
                     </tr>
				     <tr>
				       <td align="center"><span class="submit">
                         <input name="submit" type="submit" value="SUBMIT" >
                       </span></td>
				     </tr>
                   </table>
				</form>
								       <a href="subject_list.php"><img style="float:right margin-top:20px;;" src="web/images/view.jpg" height="50px" width="200px"/></a>	 				                 </div>
   </div>
</div>
</div>
<div class="wrap">
<div class="wrapper"></div>
<div class="clear"></div>
</div>
</div>
</body>
</html>