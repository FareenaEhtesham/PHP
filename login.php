<?php 
session_start();

?>

<?php
	
	include("includes/database.php");

	if(isset($_POST['login'])){
		
		$user_name = mysqli_real_escape_string($con,$_POST['user_name']);
		$user_pass = mysqli_real_escape_string($con,$_POST['user_pass']);
		
		$select_user = "select * from users where user_name='$user_name' AND user_password='$user_pass'";
		
		$run_user = mysqli_query($con,$select_user);
		
		
		if(mysqli_num_rows($run_user)>0){
			
		$_SESSION['user_name']=$user_name;
		
		echo "<script>window.open('index.php?logged=You have Successfully Logged In!','_self')</script>";

			
			}
		else {
			echo "<script>alert('User Name or Password is incorrect')</script>";
			
			
			
			}
		
		
		}


?>