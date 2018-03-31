<?php
	@session_start();
	if(!$_SESSION['admin_name']){
		header('location:login.php?error= you are not an administrator');}
?>
<!DOCTYPE html>
<html>
<?php include("include/data.php");
	  include("admin_panel.php");
?>
<form action='' method='post'>
	<table border='2' align='center' width="500">
		<tr>
			<td bgcolor="pink" align="center" colspan="5"><h2>insert the page here</h2></td>
		</tr>
		<tr>
			<th>page title:</th>
			<td><input type='text' name='page_title'></td>
		</tr>
		<tr>
			<th>page content:</th>
			<td><textarea name='page_content' cols="20" rows="10"></textarea></td>
		</tr>
		<tr><td align="center" colspan="6">
			<input type='submit' name='submit' value="submit">
		</tr>
	</table>
</form>
</html>
<?php 
	if(isset($_POST['submit']))
	{
		$post_title = $_POST['page_title'];
		$post_content = $_POST['page_content'];

		$query = " insert into pages(p_title,p_desc) values('$post_title','$post_content')";

		if (mysql_query($query)) {
			echo "<script>window.open('admin_panel.php?inserted=A new page has been inserted...','_self')</script>";
		}
	}
?>