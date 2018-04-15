<!DOCTYPE html>
<html>
<?php include("include/data.php");
	  include("login.php");
?>
 <form action='' method='post'>
        <table width=400 align='right' border='1'  style="margin-top:6em; margin-right:5em; ">
        <tr><td colspan='5' align='center' bgcolor='red'><h2>Admin Sign in here</h2></td></tr>

         <tr>
         <td align='right'>User name</td><td><input type='text' placeholder="Enter username" name='user_name'></td>
         </tr>
         
         <tr>
         <td align='right'>Name</td><td><input type='text' placeholder="Enter Name" name='user_name1'></td>
         </tr>

          <tr>
         <td align='right'>Gender</td>
         <td><input type="radio" name="radio" value="Male">Male
             <input type="radio" name="radio" value="Female">Female
        </td>
         </tr>
         <tr>
         <td align='right'>Phone no</td><td><input type='text' placeholder="Enter number" name='user_no'></td>
         </tr>
         <tr>
         <td align='right'>Email</td><td><input type='text' placeholder="Enter email" name='user_email'></td>
         </tr>
         <tr>
         <td align='right'>password</td><td><input type='password' placeholder="Enter password" name='user_pass'></td>
         </tr>
         
         <tr><td align="center" colspan="6">
			<input type='submit' name='submit3' value="Sign In">
		</tr>
        </table>
    </form>
</html>
<?php 
	if(isset($_POST['submit3']))
	{
		$post_name = $_POST['user_name'];
        $post_name1 = $_POST['user_name1'];        
		$post_gender = $_POST['radio'];
        $post_no = $_POST['user_no'];        
		$post_email = $_POST['user_email'];
		$post_pass = $_POST['user_pass'];

        $query1 = "select * from sign_in where user_name='$post_name'";
        $run = mysql_query($query1);
        if(mysql_num_rows($run)==1)
        {
            echo "<script>alert('User name already exist, try another one! ')</script>";
            exit();
        }
        else
        {
		    $query = " insert into sign_in(user_name,name,gender,phone_no,email_id,pass) values('$$post_name','$$post_name1','$$post_gender','$$post_no','$$post_email','$$post_pass')";
            if (mysql_query($query)) 
            {
			    echo "<script>window.open('sign_next.php?signn=A new page has been inserted...','_self')</script>";
            }
        }
	}
?>