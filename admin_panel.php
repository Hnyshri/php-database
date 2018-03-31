<?php
	@session_start();
	if(!$_SESSION['admin_name']){
		header('location:login.php?error= you are not an administrator');}
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>LearningAct</title>
	</head>
	<body>
		<div style="width: 90%; height: 100%; background-color: black; text-align: left; padding: 25px; margin-left: 35px; margin-top: 10px; font-size: 33px; color: white;">Welcome to LearningAct</div>
		Welcome:<font size='4' color='red'><?php echo $_SESSION['admin_name'];?></font>
		<h2><a href="logout.php" style='margin-left:30px;'>Log out</a></h2>
		<h2><a href="admin_panel.php?view_page= view page">view page</a></h2>
		<h2><a href="insert_page.php">Insert page in database</a></h2>
		<h2><a href="admin_panel.php?view_menu= view menu">view menu</a></h2>
		<h2><a href="index.php">Insert menu in database</a></h2>
		<h2 align="center"><?php echo @$_GET['delete']; ?></h2>
		<h2 align="center"><?php echo @$_GET['inserted']; ?></h2>
		<h2 align="center"><?php echo @$_GET['logged']; ?></h2>
			<?php include("include/data.php");
			if(isset($_GET['view_page']))
			 {
			?>
			
			<table width="1000" border="1" align="center">
				<tr>
					<td align="center" bgcolor="yellow" colspan="6"><h2>All page here</h2>
					</td>
				</tr>
				<tr><th>Page No</th><th>Page Title</th><th>Page content</th><th>Page Delete</th></tr>

			<tr>
			<?php
				$query = "Select * from pages";
				$run = mysql_query($query);
				while( $row = mysql_fetch_array($run))
				{
					$p_id = $row['p_id'];
					$p_title = $row['1'];
					$p_desc = substr($row[2],0,10);  //$row[2];										
			?>
			<td><?php echo $p_id; ?></td>
			<td><?php echo $p_title; ?></td>
			<td><?php echo $p_desc; ?></td>
			<td><a href="delete_page.php?del_page=<?php echo $p_id; ?>">Delete</a></td>
			</tr>
			
		<?php } } ?>
		</table>
		

		<?php 
		if (isset($_GET['view_menu']))
		{
		?>
		<table width="400" border="3" align="center">
			<tr>
				<td colspan="6" bgcolor="red" align="center">
					<h2>All menu here</h2>
				</td>
			</tr>
			<tr align="center">
				<th>Menu no:</th>
				<th>Menu title:</th>
				<th>Menu delete:</th>	
			</tr>

			<tr> 
			<?php 
				$query = " select * from menu ";
				$run = mysql_query($query);
				while ($row= mysql_fetch_array($run))
				{
					$m_id = $row['m_id'];
					$m_title = $row[1];
			?>
				<td><?php echo $m_id;?></td>
				<td><?php echo $m_title;?></td>
				<td><a href="delete_menu.php?del_menu=<?php echo $m_id;?>"> Delete</a></td>
			</tr>
			<?php } } ?>
		</table>

	</body>
	</html>
