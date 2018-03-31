<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
 
    <form action='login.php' method='post'>
        <table width=400 align='left' border='1' style="margin-top:10em; margin-left:5em; ">
        <tr><td colspan='5' align='center' bgcolor='red'><h2>Admin login here</h2></td></tr>

         <tr>
         <td align='right'>User name</td><td><input type='text' placeholder="Enter Username" name='admin_name'></td>
         </tr>
         
         <tr>
         <td align='right'>Passwod</td><td><input type='password' placeholder="Enter password" name='admin_pass'></td>
         </tr>
         
         <tr><td align="center" colspan="6">
			<input type='submit' name='submit' value="Login">
            <input type='submit' name='submit1' value="Signin">
		</tr>
        </table>
    </form>
    <h2 align="left"><?php echo @$_GET['logout']; ?></h2>
    <h2 align="left"><?php echo @$_GET['error']; ?></h2>
</body>
</html>
<?php
    include("include/data.php");
    if(isset($_POST['submit']))
    {
        $user_name=$_SESSION['admin_name'] = $_POST['admin_name'];
        $user_pass=$_POST['admin_pass'];
        $query = "select * from admin_login where user_name='$user_name' AND pass='$user_pass'";
        $run=mysql_query($query);
        if(mysql_num_rows($run)==1)
        {
            echo "<script>window.open('admin_panel.php?logged=you are logged sucessfully','_self')</script>";
        }
        else
        {
            echo "<script>alert('user name and password is wrong')</script>";
        }
    }
?>
<?php 
     include("include/data.php");
     if(isset($_POST['submit1']))
     {
        echo "<script>window.open('sign_in.php?signn=Please sign up here','_self')</script>";
        
     }
?>