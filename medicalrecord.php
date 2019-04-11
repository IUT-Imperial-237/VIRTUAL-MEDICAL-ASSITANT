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
					<a href="viewprofile.php" type="button" class="btn-xs  btn-primary">  Profile</a>
					<a href="medicalrecord.php"<button type="button" class="btn-xs  btn-primary" 
					style=" background-color: #123858;">  Medical Record</a><br>
					<a href="message.php" type="button" class="btn-xs  btn-primary">  Messages</a>

					<a href="messagedoctor.php" type="button" class="btn-xs  btn-primary" > consultation</a>
					<a href="mpi.php" type="button" class="btn-xs  btn-primary"> Modify Infos</a>
				</div>
			</div>

			<div class="container-fluid " style="margin-left: 0px;padding-left: 0px;">
				<div class="row ach" style="bottom: 0px;">
					<div class="col-sm-2 ">
						<div class="btn-group-vertical ach2 " id="todisplay">
							<button type="button" class="btn  btn-primary" style="height: 50px; color: red;font-size:15px;">
								<img src="imges/notification.png" width="15px" height="15px"><span >3</span> &nbsp; messages</button>
								<a href="viewprofile.php" type="button" class="btn bb btn-primary"> View Profile</a>
								<a href="medicalrecord.php" type="button" class="btn bb btn-primary" style=" background-color: #123858;"> View Medical Record</a>
								<a href="message.php" type="button" class="btn bb btn-primary">  Messages</a>
								<a href="messagedoctor.php" type="button" class="btn bb btn-primary"cstyle=" background-color: #123858;"> Message a Doctor</a>
								<a href="mpi.php" type="button" class="btn bb btn-primary"> Modify Personnal Infos</a>
							</div>

							
						</div>
						<div class="col-sm-2"></div>
						<div class="col-sm-6">
							<div class="table-responsive" id="tb">
								<table class="table">
									<thead >
										<tr>
											<h4 class="bg-info" colspan="2" style="text-align: center;"><img src="imges/mrecord.png" width="50px" height="50px">MEDICAL RECORD</h4>

										</tr>
									</thead>
									<tbody>
										<tr>
											<td ><img src="imges/name.jpg" width="50px" height="50px">Record id:</td>
											<td><?php echo    $_SESSION["mdrecord"][0];?></td>

										</tr>
										<tr>
											<td ><img src="imges/blood.png" width="50px" height="50px">Blood Group:</td>
											<td><?php echo    $_SESSION["mdrecord"][1];?></td>

										</tr>
										<tr>
											<td><img src="imges/height.png" width="50px" height="50px">Height:</td>
											<td><?php echo    $_SESSION["mdrecord"][2];?></td>

										</tr>
										<tr>
											<td ><img src="imges/allergy.jpg" width="50px" height="50px">Allergy:</td>
											<td><?php echo    $_SESSION["mdrecord"][3];?></td>

										</tr>
										<tr>
											<td ><img src="imges/family.jpg" width="50px" height="50px">Family Medical History:</td>
											<td><?php echo    $_SESSION["mdrecord"][4];?></td>

										</tr>
										<tr>
											<td><img src="imges/medhist.png" width="50px" height="50px">Personal Medical History :</td>
											<td><?php echo    $_SESSION["mdrecord"][5];?></td>

										</tr>
										<tr>
											<td ><img src="imges/extra.jpg" width="50px" height="50px">Extra information :</td>
											<td><?php echo    $_SESSION["mdrecord"][7];?>b</td>

										</tr>
										
									</tbody>
								</table>
							</div>
						</div>

					</div>
				</div>
			</body>
			</html>