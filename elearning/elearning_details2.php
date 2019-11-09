<?php
ob_start();
session_start();
      if($_SESSION['un']=="")
	 {
	 	header('location:login.php');
	 }
	 else
	 {
	  $subject_name = $_GET['subject_name'];
       $un="root";
      $upw="";
      $host="localhost";
      mysql_connect($host,$un,$upw);
      mysql_select_db("college");
      $get = "select * from tbl_notes_details where subject='$subject_name' and course = '". $_SESSION['course']."' ";
 	  $result = mysql_query($get);
 ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="web/css/camera.css" rel="stylesheet" type="text/css" media="all" />
    <script type='text/javascript' src="web/js/jquery.min.js"></script>
    <script type='text/javascript' src="web/js/jquery.mobile.customized.min.js"></script>
    <script type='text/javascript' src="web/js/jquery.easing.1.3.js"></script> 
    <script type='text/javascript' src="web/js/camera.min.js"></script> 
  	</script>
	
	<style>
	table tr td
	{
		border:1px solid #333333;
	}
	</style>
</head>
<body>
<div class="wrap">
<div class="wrapper">
<div class="elearn">
	 <h3>ELearning</h3>
	</div>
<div class="header_right">
	<div class="cssmenu">
		<ul>
		        <li><a href="profile.php"><span>Profile</span></a></li>
		     	<li class="active"><a href="elearning.php"><span>E-Learning</span></a></li>
			    <li class="last"><a href="logout.php"><span>Logout</span></a></li>
			<div class="clear"></div>
	    </ul>
	</div>
</div>
	<div class="clear"></div>
</div>
</div>
<div class="profhead">
<div class="welcome"> Welcome </div>
<div class="user"> <?PHP echo $_SESSION['name'];?> </div>
<div class="profile"><?PHP echo '<img src="profile_upload/'.$_SESSION['pic'].'"height"40px" width="40px" alt="'.$_SESSION['pic'].'"/>'; ?></div>
</div>
 <div class="main_bg">
<div class="wrap">
  <div class="wrapper">
    <div class="main">
      <div class="clear">
	          <table width="100%" border="1" cellpadding="1" cellspacing="1">
           <tr>
             <td height="33" colspan="2" align="center">SUBJECT : <?php echo $subject_name;?></td>
             </tr>
           <tr>
            <td width="17%" height="38" align="center">TOPICS</td>
            <td width="83%" align="center"><iframe name="subject_content" width="800px" ></iframe></td>
           </tr>
		    <tr>
			<td align="left" valign="top"><?php
				while($row = mysql_fetch_object($result))
				{
			?>
             
		   
			    <a href="elearing_topic.php?notes_id=<?php echo $row->notes_id;?>" target="subject_content"><?php echo $row->topic;?></a> 
		   
			<?php }
			?>			</td>
			             <td align="center"><iframe name="main_content" width="800px" ></iframe></td>
          </tr>
        </table>
	  </div>
    </div>
  </div>
</div>
</div>
<div class="wrap">
<div class="wrapper">
	<div class="footer">
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