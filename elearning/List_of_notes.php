 <?php
 ob_start();
 $un="root";
 $upw="";
 $host="localhost";
 mysql_connect($host,$un,$upw);
 mysql_select_db("college");
 
	$get = "select * from tbl_notes_details";
 	$result = mysql_query($get);
     if(isset($_GET['delete_id']))
	{	
		$delete_id = $_GET['delete_id'];
		$delete = "delete from tbl_notes_details where notes_id = '$delete_id ' ";
		mysql_query($delete);
		if(mysql_affected_rows()>0)
		{
			echo '<script>window.location="List_of_notes.php";</script>';
		}
	}
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
.flat-table
 {
  display: block;
  font-family:"Comic Sans MS";
  -webkit-font-smoothing: antialiased;
  font-size: 115%;
  overflow: auto;
  width: auto;
  border-top-left-radius:20px;
  border-top-right-radius:20px;
  }
  th
  {
    border:2px groove rgb(191, 204, 41);
    background-color: #21A957;
    color: white;
    font-weight: normal;
    padding: 11px;
    text-align: center;
  }
   tr:nth-child(even)
  {
    background: #D4E7F5;
	color: rgb(111, 111, 111);
	font-family:"Bookman Old Style";
	border:1px groove #85E8EF;
	padding: 10px;
	text-align:left; 
  }
  tr:nth-child(odd)
   {
     background:#B5E3E6;
	 color: rgb(111, 111, 111);
	 border:1px groove #D4E7F5;
	 font-family:"Bookman Old Style";
	 padding: 10px;
	 text-align:left; 
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
			<li class="has-sub"><a href="notesupload.php"><span>UPLOAD</span></a></li>
			<li class="active"><a href="List_of_notes.php"><span>NOTES</span></a></li>
			<li class="last"><a href="admin_logout.php"><span>LOGOUT</span></a></li>
			<div class="clear"></div>
		 </ul>
	</div>
</div>
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
<div class="wrapper"></div>
 <table class="flat-table" width="100%" border="1" cellspacing="2" rules="rows">
    <tr align="center">
      <th width="1%">ID</th>
      <th width="1%">COURSE</th>
      <th width="1%">SUBJECT</th>
      <th width="1%">TOPIC</th>
      <th width="1%">NOTES</th>
      <th width="1%">VIDEO</th>
      <th width="1%">ACTION</th>
    </tr>
	<?php 
	
	while($row = mysql_fetch_object($result))
	{
	?>
    <tr>
      <td align="center"><?php echo $row->notes_id;?></td>
      <td align="center"><?php echo $row->course;?></td>
      <td align="center"><?php echo $row->subject;?></td>
      <td align="center"><?php echo $row->topic;?></td>
      <td align="center"><?php echo $row->notes;?></td>
      <td align="center"><?php echo $row->video;?></td>
      <td align="center"><a href="List_of_notes.php?delete_id=<?php echo $row->notes_id;?>"><img src="web\images\delete.png" height="30" width"50" align="middle"/></a></td>
    </tr>
    <?php }
	 ?>
	</table>
	

</div>
<div class="wrap">

</div>
</div>
</body>
</html>