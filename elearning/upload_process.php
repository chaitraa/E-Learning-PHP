<?php
 $un="root";
 $upw="";
 $host="localhost";
 mysql_connect($host,$un,$upw);
 mysql_select_db("college");
 $course= $_POST['course'];
 $subject= $_POST['subject'];
 $topic= $_POST['topic'];
 $date= $_POST['date'];
 $summary= $_POST['summary'];
 $notes_upload = $_FILES['notes']['name'];
 $target = "Notes_upload/".$notes_upload;
 move_uploaded_file($_FILES['notes']['tmp_name'],$target);
 $video_upload = $_FILES['video']['name'];
 $target1 = "Video_upload/".$video_upload;
 move_uploaded_file($_FILES['video']['tmp_name'],$target1);
 $query= "insert into tbl_notes_details values('','$course','$subject','$topic','$date','$notes_upload','$video_upload','$summary')";
 echo '<script>alert("UPLOAD SUCCESSFULLY");window.location="notesupload.php";</script>';
 mysql_query($query);
?>