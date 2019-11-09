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
	table tr td
	{
		border:1px solid #333333;
	}
	.subject
	{
        background-color:#B8C6E5;
	    float:left;
		height:55px;
	    width:1050px;
 	}	
	.subject h1
	{
        font-size:2.5em;
        color: #000000;
	    text-shadow: 1px 0px 20px red;
        font-weight: normal;
        text-align: center;
		text-transform: uppercase;
		font-family:"Bookman Old Style";
		margin-top:5px;
	}	
	.topic_head
	{
	    background:#7697DD;
	    float:left;
	    width:250px;
		height:1550px
 		border:3px groove #000000;
		color:#FF00FF;
	}	
	.topic_head h1
	{
	   
		font-family:"Comic Sans MS";
		font-size:24px;
		font-weight:300;
		margin-top:8px;
	    text-align:center;
	    color:#FF00FF;
		margin-bottom:5px;
	}	
	.topic_head h1
	{
	   
		font-family:"Comic Sans MS";
		font-size:24px;
		font-weight:300;
		margin-top:8px;
	    text-align:center;
	    color:#FF00FF;
		margin-bottom:5px;
	}	
	.topic_body
	{
        margin-left:250px;
		margin-top:-435px;
		float:left;
	    width:800px;
		height:150px;
 		border:1px #FF0000 medium;
		color:#000000;
	}	
	.topic
	{
	   background-color:B8C6E5;
	   width:250px;
	   height:75px;
	}
	.topic h1
	{
	  
	   color:#000000;
	   text-align:center;
	   width:250px;
	   height:65px;
	   margin-top: 10px;
	}
	.topic_list
	{   float:left;
		width:250px;
		height:435px;
 		background-color:B8C6E5;
	}	
	.topic_list ul
	{  
	 list-style-type: none;
     display:block;
	 margin-bottom:3px;
	 text-align:center;
	 text-transform:capitalize;
	}	
	.topic_list a 
	{
	     color:#FFFFFF;
	     text-align:center;
		 margin-left:20px;
         display: block;
         width: 60px;
		 border:thin #0066CC;
    }
	.sub_frame_div iframe
	{
	    /*background-color:#99CC00;*/
		width:800px;
		height:75px;
 		border:1px #FF0000 medium;
		margin-top:-50px;
		margin-left:50px;
		color:#000000;
	}	
	.sub_frame_div iframe a
	{
	    /*background-color:#99CC00;*/
				margin-left:50px;
	}	
	.main_content iframe
	{
	    /*background-color:#CC3399;*/
		width:800px;
		height:1500px
 		border:1px #FF0000 medium;
		margin-top:-25px;
		color:#000000;
	}	
	</style>
</head>
<body>
<div class="wrap">
<div class="wrapper">
<div class="logo">
	 <h1>Tute</h1>
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
<div class="profile"><?PHP echo '<img style="border-radius:30px;" src="profile_upload/'.$_SESSION['pic'].'"height"80px" width="80px" alt="'.$_SESSION['pic'].'"/>'; ?></div>
</div>

 <div class="main_bg">
 <div class="wrap">
 <div class="wrapper">
   		<div class="subject">
		           <h1> <?php echo $subject_name;?></h1>
		</div>
		<div class="topic_head">
			  <h1> TOPICS </h1> 
			  <div class="topic_list"><ul>
			   <?php
		   while($row = mysql_fetch_object($result))
			{
			?>
			   <li><a href="elearing_topic.php?notes_id=<?php echo $row->notes_id;?>" target="subject_content"><?php echo $row->topic;?></a></li> <?php } ?></ul></div></div>
			  <div class="topic_body"> 
			     <div class="sub_frame_div"><iframe name="subject_content" width="800px" height="500px" frameborder="2"> </iframe> </div> 
      		     <div class="main_content"><iframe name="main_content" width="800px" height="430px;"></iframe></div>
			  </div>
			  
	  </div>
  </div>
 
</div>
</div>
</div>
<!--<div class="bottom">-->
        <div class="bottom">
        		<p class="copyrite" >E-Learning | &copy; 2015</p>
		</div><!--/*</div>*/-->
</body>
</html>
   <?php
  }
?>