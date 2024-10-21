<?php
		include_once "z_db.php";
		mysqli_query($con,"DELETE FROM `member` WHERE `member_id` = ".$_GET["d"]." LIMIT 1;") or die("Delete member error");
	
		print "<script>";
				print "alert('Member Deleted succesfully.....');";
				print " self.location='viewmember.php';";
		print "</script>";
		
	
?>
<?php
	include "footer.php";
?>