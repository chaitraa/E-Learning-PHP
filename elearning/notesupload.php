<?php
 $un="root";
 $upw="";
 $host="localhost";
 mysql_connect($host,$un,$upw);
 mysql_select_db("college");


?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--<link href="web/css/login.css" rel="stylesheet" type="text/css" media="all" />-->
<style>
.text
{
  font-family:"Comic Sans MS";
  font-size:16x;
  color:#000099;
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
			<li class="has-sub"><a href="subject_master.php"><span>SUBJECTS</span></a></li>
			<li class="active"><a href="notesupload.php"><span>UPLOAD</span></a></li>
			<li class="has-sub"><a href="List_of_notes.php"><span>NOTES</span></a></li>
			<li class="last"><a href="admin_logout.php"><span>LOGOUT</span></a></li>
		    <div class="clear"></div>
		 </ul>
	</div>
</div>
	<div class="clear"></div>
</div>
</div>
<!--<div class="fluid_container">
   <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
          <div data-src="web/images/slider1.jpg"> </div>
            <div data-src="web/images/slider2.jpg"> </div>
            <div  data-src="web/images/slider3.jpg"> </div>
  </div>
</div>-->
	<div class="clear"></div>
<div class="wrap">
<div class="wrapper"></div>
</div>
<div class="main_bg">
<div class="wrap">
<div class="wrapper">
	<div class="main">
		<div id="form_design">
			     <form action="upload_process.php" method="post" enctype="multipart/form-data">
				 <div align="center">
				   <table width="482" border="0" cellpadding="5" cellspacing="5">
				     <tr>
				       <td width="159"><label class="text">COURSE</label></td>
      <td width="288"> <select name="course">
                           <option value="MCA" >MCA</option>
                           <option value="MSc" >MSc</option>
                           <option value="MTech" >MTech</option>
		              </select>      </td>
    </tr>
				      
				     <tr>
				       <td><label class="text">SUBJECT</label></td>
      <td>
	  <select name="subject">
	  	<option>SELECT</option>
		<?php	$get = "select * from subject_master";
				$result = mysql_query($get);
				while($row = mysql_fetch_object($result))
				{?>
				
				<option><?php echo $row->subject;?></option>
				<?php }
		?>
		
	  </select>
	  </td>
    </tr>
				     <tr>
				       <td><label class="text">TOPIC</label></td>
      <td><input type="text" name="topic" class="text" placeholder="TOPIC"/></td>
    </tr>
				     <tr>
				       <td class="text"><label>DATE</label></td>
      <td><input type="text" name="date" class="text" value="<?php echo date('d/m/Y');?>"/></td>
    </tr>
				     <tr>
				       <td height="33"><label class="text">NOTES UPLOAD</label></td>
      <td><input type="File" name="notes" /></td>
    </tr>
				     <tr>
				       <td height="40"><label class="text">VIDEO UPLOAD</label></td>
      <td><input type="File" name="video"/></td>
    </tr>
				     
	<td><label class="text">SUMMARY</label></td>
      <td><textarea name="summary" cols="" rows="3" class="text" ></textarea></td>
	</tr>
				     <tr>
				       <td height="91" colspan="2"><div class="submit">
				         <p>&nbsp;			             </p>
				         <p>
				           <input name="submit" type="submit" value="SUBMIT" ></p>
				       </div>	</td>
      </tr>
                   </table>
				   </div>
				 <p>&nbsp;</p>
					
				</form>
  </div>
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