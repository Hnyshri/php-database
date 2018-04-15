  <!DOCTYPE>  
<html> 
	<head> 
		<title>Hnyshri - LearningAct</title>
		<style type="text/css">
			a:link{
				text-decoration: none;
				color: white;
			}
			h1{color: white;}
		</style>
	</head>
<body>  
<table width=90% border="0" align="center">
<!-- header bar -->
	<tr>
		<td><?php include("include/header.php"); ?></td>
	</tr>

	<!-- navigation bar -->
	<tr>
		<td>
			<table border="2">
				<tr>
					<?php include("include/data.php");
						$query = "select * from menu ";
						$run = mysql_query($query);

						while ($row = mysql_fetch_array($run))
						{
							$title = $row[1];
							echo " <td bgcolor='yellow' width='300' align='center'><a href='page.php?pages= $title'>$title</a> </td> ";
						}
					 ?>
				</tr>
			</table>
		</td>
	</tr>

	<!-- main contain menu bar -->
	<tr>
		<td>
			<table width=100%; border="0" align="center">
				<tr>
						<?php 
						
							$page = $_GET['pages'];
							$query ="select * from pages where p_title= '$page'";
							$run = mysql_query($query);						
							while($row = mysql_fetch_assoc($run))
							{
							echo "<td bgcolor='aqua'>"."<h2>"."<br>".$row['p_title']."</h2>".$row['p_desc']."</td>";	
						
							}						
						?>
				</tr>		
			</table>
		</td>
	</tr>

	<!-- footer bar -->
	<tr>
		<td  bgcolor="black" height="50" align="center">
			<h2 style="color: white;">Copyright &copy; 2017 Shriyansh </h2>
		</td>
	</tr>
</table>
</body>  
</html>