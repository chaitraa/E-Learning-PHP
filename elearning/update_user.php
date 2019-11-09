<?php
ob_start();
session_start();
$un="root";
        $upw="";
     $host="localhost";
     mysql_connect($host,$un,$upw);
     mysql_select_db("college");
      if($_SESSION['un']=="")
	 {
	 	header('location:login.php');
	 }
	 else
	 {
        $mobile= $_POST['mobile'];
        $email= $_POST['email'];
        $password= $_POST['password'];
        $sem= $_POST['sem'];
		 $old_pic= $_POST['old_pic'];
        $new_pic =$_FILES['profile']['name'];
		$new_pic_path = "";
		if($new_pic!='')
		{
			$new_pic_path = $new_pic;
			 $target = "profile_upload/".$new_pic;
			 move_uploaded_file($_FILES['profile']['tmp_name'], $target);
		}
		else
		{
			$new_pic_path = $old_pic;
		}
       
		$user=$_SESSION['un'];
       
       $query= "UPDATE registration SET sem='$sem', phno='$mobile', email='$email', photo='$new_pic_path',password='$password' WHERE username='$user'";
       
     mysql_query($query);
     echo '<script>alert("SUCCESSFULLY UPDATED");window.location="profile.php";</script>';
  }
  ?>