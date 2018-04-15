<?php include("include/data.php");
	$delete_menu = $_GET['del_menu'];
	$query = " delete from menu where m_id= '$delete_menu'";
	if (mysql_query($query)) 
	{
		echo "<script>window.open('admin_panel.php?delete= A row is deleted.....','_self')</script>";
	}

?>