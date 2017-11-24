<!DOCTYPE html>

<html lang="en" class="gr__getbootstrap_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Recruiter</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  </head>
<style>
.error {color:#FF0000;}
</style>
  <body style="background-image: url(https://cdn-images-1.medium.com/max/2000/1*YLcs-b-JZa78GTVQ-Om79w.jpeg); background-size: cover">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.html">DreamJob</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.html">Home </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link " href="#">JobSeekers</a>
          </li>
            <li class="nav-item active">
            <a class="nav-link " href="login-signup.php">Login/Signup</a>
          </li>
                    </ul>
      </div>
    </nav>
      <div style="display: block; margin-top: 50px; margin-left: 30px;margin left: 30px;color: azure;">
      <form  action="<?php echo $_SERVER["PHP_SELF"];?>" method='post'>
          <h2>Create Recruiter Profile</h2><br>
          <div style="display: block; margin: 5px 500px 5px 5px;    padding: 20px 0px 20px 30px;background: #efefef;color: darkgrey;font-size:30px; border-color: white;border-width: thick;border-style: solid">
         <h4> Professional Details</h4><br>
          <div style="font-size: 15px;" >
          <p><span class="error">* required field.</span></p>
          <input type="text" placeholder="Association ID" name="assc"> <span class="error">*</span><br><br>
          <input type="text" placeholder="Job Title" name="jobt"><br><br>
          <textarea placeholder="Keywords for Job Title" rows="4" cols="50" name="keyw"></textarea><br><br>
              <textarea placeholder="Job Description" rows="4" cols="50" name="descrip"></textarea><br><br>
              <input type="text" placeholder="Minimum experience required(years)" size="35" name="expmin" > <span class="error">*</span><br><br>
              <input type="text" placeholder="Maximum experience required(years)" size="35" name="expmax"><br><br>
              <input type="text" placeholder="Annual ctc(lpa)" name="ctc" > <span class="error">*</span>&nbsp;&nbsp;&nbsp;
              <input type="text" placeholder="Number of vacancies" name="vac" ><span class="error">*</span><br><br>
              <input type="text" placeholder="Qualification (UG)" name="ug" ><br><br>
              <input type="text" placeholder="Qualification(PG)" name="pg" ><br><br>
              <input type="text" placeholder="Qualificaion(PHD)" name="phd" ><br><br>
              <h5>Recruiter Details</h5><br>
              <input type="text" placeholder="Name" name="recname" ><span class="error">*</span>&nbsp;&nbsp;&nbsp;
              <input type="email" placeholder="Email" name="email" ><span class="error">*</span><br><br>
              <input type="text" placeholder="Contact no." name="contact" ><span class="error">*</span><br><br>
              <input type="submit" value="Post" class="btn btn-primary">
              </div></div>
          </form>
      </div>
       <hr class="featurette-divider">
      <!-- FOOTER -->
      <footer>
        <p class="float-right"><a href="login-recruiter.php">Back to top</a></p>
        <p>© 2017 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
        $sql=mysqli_connect("localhost","batman","J0K3R","dreamjob") or die(mysqli_error());
        $assc=$_POST['assc'];
        
        $query=mysqli_query($sql,"select * from association_login where assoc_id='$assc'");
        
        $exists = mysqli_num_rows($query); //Checks if username exists
	if($exists > 0) //IF there are no returning rows or no existing username
	{
                $comp=$_POST['comp'];$jobt=$_POST['jobt'];$keyw=$_POST['keyw'];$descrip=$_POST['descrip'];$expmin=$_POST['expmin'];$expmax=$_POST['expmax'];$ctc=$_POST['ctc'];$vac=$_POST['vac'];$ug=$_POST['ug'];$pg=$_POST['pg'];$phd=$_POST['phd'];$recname=$_POST['recname'];$email=$_POST['email'];$contact=$_POST['contact']; 
        mysqli_query($sql,"insert into job_post values (rand(100000,999999),'$assc','$jobt','$keyw','$descrip','$expmin','$expmax','$ctc','$vac','$ug','$pg','$phd','$recname','$email','$contact')"); 
        
		Print '<script>alert("Request Sent!!");</script>'; //Prompts the user
		Print '<script>window.location.assign("post-job.php");</script>'; // redirects to login.php
        }
        else{
		Print '<script>alert("Association Not Present!");</script>'; //Prompts the user
		Print '<script>window.location.assign("post-job.php");</script>'; // redirects to login.php
        }
}
?> 
