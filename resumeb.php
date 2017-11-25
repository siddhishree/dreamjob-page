<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>One Page Resume</title>

     <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     </style>
</head>
<?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
        }
	else{
		header("location:login-signup.html"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value
        
        $sql=mysqli_connect("localhost","batman","J0K3R","dreamjob") or die(mysqli_error()); 
        $row=mysqli_query($sql,"select * from user_resume where username='$user'");
?>


<body>

    <div id="page-wrap">
    
        <img src="https://raw.githubusercontent.com/salomonelli/best-resume-ever/master/resume/id.jpg" alt="Photo" id="pic" height="200px" width="200px">
    
        <div id="contact-info" class="vcard">
        
            <!-- Microformats! -->
        
          <!--  <h1 class="fn"><?php echo($row['First_Name'].' '.$row['Middle_Name'].' '.$row['Last_Name'])?></h1>
        -->
            <p>
            Contact: <span class="tel"><?php echo $row['contact'] ?></span><br />
                Email: <a class="email" href="<?php echo $row['email'] ?>"><?php echo($row['email'])?></a><br>
                Website: <a class="email" href="<?php echo $row['website'] ?>"><?php echo($row['website'])?></a>
            </p>
        </div>
                
        <div id="objective">
            <p>
                I am an outgoing and energetic (ask anybody) young professional, seeking a 
                career that fits my professional skills, personality, and murderous tendencies. 
                My squid-like head is a masterful problem solver and inspires fear in who gaze upon it. 
                I can bring world domination to your organization. 
            </p>
        </div>
        
        <div class="clear"></div>
        
        <dl>
            <dd class="clear"></dd>
            
            <dt>Education</dt>
            <dd>
                <p><strong>UG:</strong> <?php echo($row['education_1'])?><br />
                   <strong>PG:</strong> <?php echo($row['education_2'])?><br>
                <strong>Phd:</strong> <?php echo($row['education_3'])?></p>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Skills</dt>
            <dd>
                <h2>Office skills</h2>
                <p>Office and records management, database administration, event organization, customer support, travel coordination</p>
                
                <h2>Computer skills</h2>
                <p>Microsoft productivity software (Word, Excel, etc), Adobe Creative Suite, Windows</p>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Experience</dt>
            <dd>
                <h2>Total Experience <span>Leader/Overlord - Baton Rogue, LA - 1926-2010</span></h2>
                <ul>
                    <li>Inspired and won highest peasant death competition among servants</li>
                    <li>Helped coordinate managers to grow cult following</li>
                    <li>Provided untimely deaths to all who opposed</li>
                </ul>
                
                <h2>Previous Job Details<span>Bartender/Server - Milwaukee, WI - 2009</span></h2>
                <ul>
                   <p> <strong>Company:</strong> <?php echo($row['company_a'])?><br>
                    <strong>Duration-From:</strong> <?php echo($row['duration_a_from'])?><br>
                    <strong>Duration-To:</strong> <?php echo($row['duration_a_till'])?></p>
                
                </ul> 
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Job Title</dt>
            <dd><?php echo($row['job_title'])?></dd>
            
            <dd class="clear"></dd>
            
            <dt>Address</dt>
            <dd><?php echo($row['address'])?></dd>
            
            <dd class="clear"></dd>
        </dl>
        
        <div class="clear"></div>
    
    </div>

</body>

</html>
