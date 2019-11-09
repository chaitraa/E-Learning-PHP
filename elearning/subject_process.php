<?php
 $un="root";
 $upw="";
 $host="localhost";
 mysql_connect($host,$un,$upw);
 mysql_select_db("college");
  $subject= $_POST['subject'];
  $logo_upload = $_FILES['logo']['name'];
  $target2 = "Logo_upload/".$logo_upload;
  move_uploaded_file($_FILES['logo']['tmp_name'],$target2);
  $query= "insert into subject_master values('','$subject','$logo_upload')";
  echo '<script>alert("UPLOAD SUCCESSFULLY");window.location="subject_master.php";</script>';
  mysql_query($query);
  ?>