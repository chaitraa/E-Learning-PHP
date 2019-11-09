<?php
     session_start();
	 
     if($_SESSION['admin_session']=="")
	 {
	 	header('location:admin_login.php');
	 }
	 else
	 {
	 ob_start(); // to clear the browser cache...
 $un="root";
 $upw="";
 $host="localhost";
 mysql_connect($host,$un,$upw);
 mysql_select_db("college");
 
	$get = "select * from registration order by regdate asc";
 	$result = mysql_query($get);


	if(isset($_GET['delete_id']))
	{	
		$delete_id = $_GET['delete_id'];
		$delete = "delete from registration where register_no = '$delete_id ' ";
		mysql_query($delete);
		if(mysql_affected_rows()>0)
		{
			echo '<script>window.location="user_list.php";</script>';
		}
	}
	if(isset($_GET['accept_id']))
	{
		$accept_id = $_GET['accept_id'];
		$update = "update registration set status = 'accept' where register_no = '$accept_id '";
		mysql_query($update);
		if(mysql_affected_rows()>0)
		{
			echo '<script>alert("Status changes succesfuly");window.location="user_list.php";</script>';
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
		  	<li class="active"><a href="user_list.php"><span>USERS</span></a></li>
			<li><a href="subject_master.php"><span>SUBJECTS</span></a></li>
			<li><a href="notesupload.php"><span>UPLOAD</span></a></li>
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
<div class="wrapper"></div>
  <table class="flat-table" width="100%" border="1" cellspacing="2" rules="rows">
    <tr align="center">
      <th width="4%">#</th>
	   <th width="10%">REG DATE</th>
      <th width="12%">NAME</th>
      <!--<th width="8%">DOB</th>-->
      <th width="8%">GENDER</th>
      <th width="1%">COURSE</th>
      <th width="5%">SEM</th>
      <th width="9%">REGNO</th>
	 <!-- <th width="7%">PHNO</th>-->
     
      <th width="1%">PROFILE</th>
	  <!--<th width="9%">ID</th>-->
      <th width="7%" colspan="2">ACTION</th>
    </tr>
    <?php 
	$i=1;
	while($row = mysql_fetch_object($result))
	{
	?>
	 <tr>
      <td align="center"><?php echo $i++;?></td>
	  <td align="center"><?php echo $row->regdate;?></td>
      <td align="center"><?php echo $row->first_name.' '.$row->last_name;?></td>
      <!--<td align="center"><?php/* echo $row->dob;*/?></td>-->
      <td align="center"><?php echo $row->gender;?></td>
	  <td align="center"><?php echo $row->course;?></td>
      <td align="center"><?php echo $row->sem;?></td>
      <td align="center"><?php echo $row->register_no;?></td>
	  <!--<td align="center"><?php /*echo $row->phno;*/?></td>-->
      <td align="center"><img src="profile_upload/<?php echo $row->photo;?>" height="30px" width="30px"> </td>
	  <!--<td align="center"><img src="id_upload/<?php /*echo $row->id;*/?>" height="50px" width="50px"> </td>-->
      <td cellspacing="3" align="center"><a href="user_list.php?accept_id=<?php echo $row->register_no;?>"><img src="web\images\accept.png" height="30" width"50"/></a></td>
	  <td cellspacing="3" align="center"><a href="user_list.php?delete_id=<?php echo $row->register_no;?>"><img src="web\images\delete.png" height="30" width"50"/></a></td>
	</tr>
    <?php }
	 ?>
  </table>

</div>
<div class="wrap">
<div class="wrapper"></div>
<div class="clear"></div>
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
</body>
</html>
 <?php
   }
   ?>