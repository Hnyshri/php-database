<!DOCTYPE html>  
<html lang="en-US"> 
	<head> 
		<title>Home - LearningAct</title>
		<link rel="icon" href="Hnyshri.png" type="image/png" sizes="20X20">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<style type="text/css">
			a:link{
				text-decoration: none;
				color: white;
			}
			h1{color: white;}
		</style>
	</head>
<body>  
<table width=90% border="0" align="center" >
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
							echo " <td bgcolor='yellow' width='300' align='center'><a href='page.php?pages= $title'>$title</a></td> ";
						}
					?>
				</tr> 
			</table>
		</td>
	</tr>

	<!-- main contain menu bar -->
	<tr>
		<td bgcolor="pink" height="450" valign="top">
		<h2>Welcome.........</h2>
		<p>PHP tutorial for beginners and professionals provides deep knowledge of PHP scripting language. Our PHP tutorial will help you to learn PHP scripting language easily.

		This PHP tutorial covers all the topics of PHP such as introduction, control statements, functions, array, string, file handling, form handling, regular expression, date and time, object-oriented programming in PHP, math, PHP mysql, PHP with ajax, PHP with jquery and PHP with XML.</p>

		<!-- <center><img src=""></center> -->
		</td>
	</tr>

	<!-- footer bar -->
	<tr>
		<td  bgcolor="black" height="50" align="center">
			<h2 style="color: white;">Copyright &copy; 2017 Shriyansh Gupta</h2>
		</td>
	</tr>
</table>
</body>  
</html>