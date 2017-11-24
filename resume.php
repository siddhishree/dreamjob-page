<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title></title>
</head>
<?php
        session_start();
        if($_SESSION['user']){ //checks if user is logged in
        }
	else{
		header("location:login-signup.html"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value
?>


<body>
<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post"> 
          <h2>Let's Create Your Profile</h2>
          <h3><?php echo "$user"?></h3>
        <br>
          <div style="display: block; margin: 5px 500px 5px 5px;    padding: 20px 0px 20px 30px;background: #efefef;color: darkgrey;font-size:30px; border-color: white;border-width: thick;border-style: solid">
         <h4> User Details</h4><br>
          <div style="font-size: 15px;" >
          <input type="text" placeholder="First name" name="fname" required> &nbsp; &nbsp; &nbsp;
          <input type="text" placeholder="Middle name" name="mname">&nbsp; &nbsp; &nbsp;
              <input type="text" placeholder="Last name" name="lname" required> <br><br>
              <input type="text" placeholder="Qualification (UG)" name="ug" >&nbsp; &nbsp; &nbsp;
              <input type="text" placeholder="Qualification(PG)" name="pg" >&nbsp; &nbsp; &nbsp;
              <input type="text" placeholder="Qualificaion(PHD)" name="phd" ><br><br>
              <input type="text" placeholder="Job Title" name="jobtitle">&nbsp; &nbsp; &nbsp;
              <input type="text" placeholder="Experience"  name="exp" ><br><br>
              <input type="text" placeholder="Previous Company name" name="comp1"><br><br>
             Worked From(date)&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;Worked To(date)<br><input type="date" placeholder="Worked From(date)" name="from1">&nbsp; &nbsp; &nbsp;
             <input type="date" placeholder="Worked To(date)" name="to1"><br><br>
             <input type="text" placeholder="Skills" name="skills" multiple size="35" required><br><br>
              <input type="email" placeholder="Email" name="email" size="35" required><br><br>
              <input type="text" placeholder="Contact no." name="contact" required><br><br>
              <input type="text" placeholder="Address" name="address" size="35"><br><br>
              <input type="text" placeholder="Website" name="website" size="35"><br><br>
              <input type="submit" value="Build" class="btn btn-primary">
              </div></div>
          </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
        $sql=mysqli_connect("localhost","batman","J0K3R","dreamjob") or die(mysqli_error());
        $fname=$_POST['fname'];$mname=$_POST['mname'];$lname=$_POST['lname'];$ug=$_POST['ug'];$pg=$_POST['pg'];$phd=$_POST['phd'];$jobt=$_POST['jobtitle'];$ex=$_POST['exp'];$cmp=$_POST['comp1'];$frm=$_POST['from1'];$to=$_POST['to1'];$skill=$_POST['skill'];$mail=$_POST['email'];$cont=$_POST['contact'];$addr=$_POST['address'];$webs=$_POST['website'];

        mysqli_query($sql,"insert into user_resume values ('$user','$fname','$mname','$lname','$ug','$pg','$phd','$jobt','$ex','$cmp','$frm','$to','$skill','$mail','$cont','$addr','$webs');") or die(mysqli_error());
        header("location: home.php"); // redirects the user to the authenticated home page
} 
?>
