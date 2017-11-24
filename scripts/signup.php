<?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
                $username=$_POST["username"];
                $password=$_POST["password"];
                $bool=true;

                $sql=mysqli_connect("localhost","batman","J0K3R","dreamjob") or die(mysqli_error()); 

                $query = mysqli_query($sql,"select * from user_login"); //Query the users table
	        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) //display all rows from query
	        {
		        $table_users = $row["username"]; // the first username row is passed on to $table_users, and so on until the query is finished
		        if($username == $table_users) // checks if there are any matching fields
		        {
		        	$bool = false; // sets bool to false
			        Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
			        Print '<script>window.location.assign("../login-signup.html");</script>'; // redirects to register.php
        		}
	        }
                
                if($bool){ // checks if bool is true{
                        $mail=$_POST["email"];
                        mysqli_query($sql,"INSERT INTO user_login (username,email,password) VALUES ('$username','$mail','$password')"); //Inserts the value to table users
		        Print "<script>alert('Successfully Registered!');</script>"; // Prompts the user
		        Print "<script>window.location.assign('../login-signup.html');</script>"; // redirects to register.php
	        }
        }
?>
