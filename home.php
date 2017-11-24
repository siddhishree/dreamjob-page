<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap_.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
<?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
        }
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value
	?>

  <body style="background-image: url(images/job.jpg); background-size: cover">
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Dreamjob</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Recruiters</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Job Seekers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fixed-right" href="login-signup.html">Login/Signup</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
            <a class="nav-link active" href="#"><?php echo "$user"?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Jobs Applied</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Resume</a>
            </li>
               <li class="nav-item">
              <a class="nav-link" href="scripts/logout.php">Log Out</a>
            </li>
          </ul>

          

        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Dashboard</h1>
            <h3>Job Search</h3>
             <div style="font-size: 20px;">
            <form>
               
                <input type="text" placeholder="Skills">
                <select placeholder="Experience">
                    <option value="" disabled selected> &nbsp;&nbsp;Experience&nbsp;&nbsp; </option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    </select>
                <select >
                    <option value="" disabled selected> &nbsp;&nbsp;Salary(In LPA)&nbsp;&nbsp; </option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    </select> &nbsp;&nbsp;<br><br>
                <a class="btn btn-lg btn-primary" href="#" role="button">Search</a>
            </form></div>

        </main>
      </div>
    </div>

</body></html>
