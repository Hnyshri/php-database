<?php include("include/data.php");
	$delete_page = $_GET['del_page'];
	$query = " delete from pages where p_id= '$delete_page'";
	$run = mysql_query($query);
	
	if (mysql_query($query)) 
	{
		echo "<script>window.open('admin_panel.php?delete= This row is deleted.....','_self')</script>";
	}

?>