<?php
ob_start(); // to clear the browser cache...
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$get="select * from registration where username='$username' and password='$password' and status='accept' ";
$un="root";
  $upw="";
  $host="localhost";
  mysql_connect($host,$un,$upw);
   mysql_select_db("college");
   $res=mysql_query($get);
   while($r=mysql_fetch_object($res))
   {
      $fn= $r->first_name;
      $ln= $r->last_name;
	  $name=$fn.' '.$ln;
      $father= $r->father_name;
      $mother= $r->mother_name;
      $dob= $r->dob;
      $gender= $r->gender;
      $course= $r->course;
      $sem= $r->sem;
      $reg= $r->register_no;
      $phno= $r->phno;
      $email= $r->email;
      $profile_pic=$r->photo;
	  $pasword=$r->password;
	  $status='accept';
	  
   }
   if(mysql_affected_rows()>0)
   {
        $_SESSION['un']=$username;
        $_SESSION['name']=$name;
		$_SESSION['dob']=$dob;
		$_SESSION['gender']=$gender;
        $_SESSION['course']=$course;
		$_SESSION['sem']=$sem;
		$_SESSION['reg']=$reg;
		$_SESSION['phno']=$phno;
		$_SESSION['email']=$email;
		$_SESSION['pic']=$profile_pic;
		$_SESSION['pswd']=$pasword;
		header("location:elearning.php");
	}
	else
	{
	    echo '<script>alert("NOT AUTHENTICATED");window.location="login.php";</script>';
	}
?>
   