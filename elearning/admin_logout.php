<?php
session_start();
     unset($_SESSION['admin_session']);
	 header('location:admin_login.php');
?>
   