<?php 
session_start() ;

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="profile.css">
	<link rel="stylesheet" href="bootstrap.min.css">
	<script src="jquery.min.js"></script>
	<script src="user.js"></script>
	<script src="bootstrap.min.js"></script>
	<link rel="stylesheet" href="font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="projects.css">
	<style type="text/css">

	@media only screen and (max-width: 760px) {
		#tohide{
			display: block;
		}
		#todisplay{
			display: none;
		}
		#tb{
			font-size: 15px;
		}

	}
	.cg{
		font-size: 20px;
		color: black;
	}
	.cg div{
		border-bottom : 5px solid black;
	}
</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="imges/logo.jpg" alt="Logo" style="width:30px;height: 25px; position: relative;">
      </a>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="index.html" > Virtual Medical Assistant</a> 
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">

          <li><a href="index.html">Home</a></li>
          <li><a href="about_us.html">About Us</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Online Consultations <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="video_consultation.html">Video Consultation</a></li>
              <li><a href="audio_consultation.html">Audio Consultation</a></li>
              <li><a href="chatconsultation.html">Chat Consultation</a></li>
            </ul>
          </li>
          <li><a href="emergency_care.html">Emergency Care</a></li>
          <li><a href="symptoms.html">Symptoms</a></li>
          <li><a href="neares_hospital.html">Find Neares Hospital</a></li>
          <li><a href="blog.html">Blog</a></li>
         <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><?php   echo $_SESSION["user"][0]; ?></a></li>
              <li><a href="logout.php">SignOut</p></li>
            </ul>
          </li>
          </ul>


        </div>
      </div>
    </nav>


		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 marg"><br></div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 " id="tohide" style="font-size: 2px;">
				<button type="button" class="btn-xs  btn-primary" style=" color: red;">
					<span >3</span> &nbsp; messages</button>
					<a href="viewprofile.php" type="button" class="btn-xs  btn-primary" style=" background-color: #123858;">  Profile</a>
					<a href="medicalrecord.php"<button type="button" class="btn-xs  btn-primary">  Medical Record</a><br>
						<a href="message.php" type="button" class="btn-xs  btn-primary">  Messages</a>
						<a href="messagedoctor.php" type="button" class="btn-xs  btn-primary"> consultation</a>
						<a href="mpi.php" type="button" class="btn-xs  btn-primary"> Modify Infos</a>
					</div>
				</div>

				<div class="container-fluid " style="margin-left: 0px;padding-left: 0px;">
					<div class="row ach" style="bottom: 0px; ">
						<div class="col-sm-2 ">
							<div class="btn-group-vertical " id="todisplay">
								<button type="button" class="btn  btn-primary" style="height: 50px; color: red;font-size:15px;">
									<img src="imges/notification.png" width="15px" height="15px"> <span >0</span> &nbsp; messages</button>
									<a href="doctorprofile.php" type="button" class="btn bb btn-primary" style=" background-color: #123858;"> View Profile</a>
									
									<a href="doctorreadmessage.php" type="button" class="btn bb btn-primary"> Read messages</a>
									<a href="messagetopatient.php" type="button" class="btn bb btn-primary"> Message a Patient</a>
									<a href="doctormpi.php" type="button" class="btn bb btn-primary"> Modify Personnal Infos</a>
									<a href="#.php" type="button" class="btn bb btn-primary"> XXXXX</a>
								</div>


							</div>
							<div class="col-sm-2"></div>
							<div class="col-sm-6 cg">






								
											
												<p class="bg-info"  style="text-align: center;"><img src="imges/mail.png" width="50px" height="50px">Messages sent by Patients </p>

										



	<?php 

    $servername = "localhost";
   $username = "abdelkader";
   $password1 = "gelanyboy";
   $dbname = "test";

            // Create connection
   $conn = new  mysqli($servername, $username, $password1, $dbname);

                // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   } 
   
   $sql = "SELECT *   FROM notification where statusDoctor ='1'  ";
   $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    	$sender =  $row["patientEmail"];
    	$time =$row["dateSent"];
    	$message =$row["patientSent"];
      echo "<span> Sent by : $sender </span><br>";
         echo "<span>date : $time  </span><br>";
        
        
         $temp = $row["fileSent"];
         echo '<div > message :<br>'.$message.' <br><img src ="'. $temp. '" width = "200px" height ="200px"> </div><br><br>';
        //  echo '<img src = "'.$temp.' " height = "150" width = "150" >';   
        // echo '<div $style> message :<br>  $message <br><img src ="'. $temp. '" width = "200px" height ="200px"> </div><br>';
        // echo "<img src =''. $temp. '' width = '200px' height ='200px'>";
         $notid = $row["notificationId"];

         echo '<form method ="post"  action ="reply.php"> <textarea cols="30" rows="5" name ="'.$notid.'"> write reply here </textarea>  
          <input type ="submit" name="submit" value="reply" > </form> <br><br><br><br><br>  ';
    }

  ?>

							</div>

						</div>
					</div>
				

				</body>
				</html>
