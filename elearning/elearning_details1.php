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
      $get = "select * from tbl_notes_details where subject='$subject_name' ";
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
	.topic
	{
	   height:75%;
	   width:15%;
	   border:thin;
	
	width="14%"
	}
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
 <div class="clear"></div>
<div class="main_bg">
<div class="wrap">
  <div class="wrapper">
    <div class="main">
      <div class="clear">
	  <div class="topic">
	  	<?php
				while($row = mysql_fetch_object($result))
				{
			?>
            <ul>
			   <li><a href="elearing_topic.php?notes_id=<?php echo $row->notes_id;?>" target="subject_content"><?php echo $row->topic;?></a></li>
			</ul>
			<?php }
			?>
	  
	  </div>
        <!--<table width="100%" border="1" cellpadding="2" cellspacing="2">
           <tr>
             <td colspan="2" align="center">SUBJECT : <?php echo $subject_name;?></td>
             </tr>
           <tr>
            <td width="14%" align="center">TOPIC</td>
            <td width="86%" align="center">&nbsp;</td>
           </tr>
          <tr>
		  	<?php
				while($row = mysql_fetch_object($result))
				{
			?>
            <td align="center" valign="top"><a href="elearing_topic.php?notes_id=<?php echo $row->notes_id;?>" target="subject_content"><?php echo $row->topic;?></a></td>
			<?php }
			?>
            <td align="center"></td>
          </tr>
        </table>-->
		<iframe name="subject_content" width="600px" height="400px;"></iframe>
		</div>
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