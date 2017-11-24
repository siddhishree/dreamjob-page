<?php
        session_start();
        $sql=mysqli_connect("localhost","batman","J0K3R","dreamjob") or die(mysqli_error()); 
        $user=$_SESSION['user'];
        mysqli_query($sql,"update user_login set status=0 where username='$user'");
	session_destroy();
	Print '<script>alert("Logged Out!");</script>'; //Prompts the user
	header("location:../login-signup.html");
?>
