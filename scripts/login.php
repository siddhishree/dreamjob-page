<?php
        session_start();

        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql=mysqli_connect("localhost","batman","J0K3R","dreamjob") or die(mysqli_error()); 

        $query=mysqli_query($sql,"select * from user_login where email='$email'");
        
        $exists = mysqli_num_rows($query); //Checks if username exists
	if($exists > 0) //IF there are no returning rows or no existing username
	{

                        $row=mysqli_fetch_array($query,MYSQLI_ASSOC);
			$table_password = $row['password']; // the first password row is passed on to $table_users, and so on until the query is finished
		if($password == $table_password) // checks if there are any matching fields
		{
			$_SESSION['user'] = $row['username']; //set the username in a session. This serves as a global variable
                        $query=mysqli_query($sql,"update user_login set TIME_OF_LOGIN=now(),status=1 where email='$email'");
                        header("location: ../home.php"); // redirects the user to the authenticated home page
		}
		else
		{
			Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("../login-signup.html");</script>'; // redirects to login.php
		}
	}
	else
	{
		Print '<script>alert("Incorrect Username!");</script>'; //Prompts the user
		Print '<script>window.location.assign("../login-signup.html");</script>'; // redirects to login.php
	}
?>
