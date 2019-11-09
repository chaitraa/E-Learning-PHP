<?php
  $fn= $_POST['fn'];
  $ln= $_POST['ln'];
  $father= $_POST['father'];
  $mother= $_POST['mother'];
  $dob= $_POST['dob'];
  $gender= $_POST['gender'];
  $course= $_POST['course'];
  $sem= $_POST['sem'];
  $reg= $_POST['reg'];
  $addr= $_POST['addr'];
  $city= $_POST['city']; 
  $pin= $_POST['pin'];
  $phno= $_POST['phno'];
  $email= $_POST['email'];
  $user= $_POST['username'];
  $pw= $_POST['pw'];
  $cpw= $_POST['cpw'];
  $regdate=date('d/m/Y');
    /* PROFILE UPLOAD   */
  $pic=$_FILES['profile']['name'];
  $target = "profile_upload/".$pic;
  move_uploaded_file($_FILES['profile']['tmp_name'], $target);
  $query= "insert into registration values('$regdate','$fn','$ln','$father','$mother','$dob','$gender','$course','$sem','$reg','$addr','$city','$pin','$phno','$email','$pic','$user','$pw','reject')";
 $un="root";
  $upw="";
  $host="localhost";
  mysql_connect($host,$un,$upw);
  mysql_select_db("college");
 if($pw==$cpw)
  {
      mysql_query($query);
	 echo '<script>alert("REGISTERED SUCCESSFULLY");window.location="login.php";</script>';
  }
  else
  {
     echo '<script>alert("PASSWORD DOESNOT MATCH");window.location="registration.php";</script>';
  }
  ?>