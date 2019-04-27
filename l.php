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
        <img src="imges/logo.jpg" alt="Logo" style="width:40px;height: 40px; position: relative;top: -10px;">
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
          <li><a href="blog.php">Blog</a></li>
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
									<img src="imges/notification.png" width="15px" height="15px"> <span >3</span> &nbsp; messages</button>
									<a href="viewprofile.php" type="button" class="btn bb btn-primary" style=" background-color: #123858;"> View Profile</a>
									<a href="medicalrecord.php" type="button" class="btn bb btn-primary"> View Medical Record</a>
									<a href="message.php" type="button" class="btn bb btn-primary">  Messages</a>
									<a href="messagedoctor.php" type="button" class="btn bb btn-primary"> Message a Doctor</a>
									<a href="mpi.php" type="button" class="btn bb btn-primary"> Modify Personnal Infos</a>
								</div>


							</div>
							<div class="col-sm-2"></div>
							<div class="col-sm-6">
								<div class="table-responsive" id="tb">
									<table class="table">
										<thead >
											<tr>
												<th class="bg-info" colspan="2" style="text-align: center;"><img src="imges/profile.png" width="50px" height="50px">PROFILE </th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td ><img src="imges/name.jpg" width="50px" height="50px">First Name:</td>
												<td id="firstName"><?php echo   $_SESSION["profile"][0];?></td>

											</tr>
											<tr>
												<td ><img src="imges/name.jpg" width="50px" height="50px">Last Name:</td>
												<td id="lastName"><?php echo   $_SESSION["profile"][1];?></td>

											</tr>
											<tr>
												<td><img src="imges/dob.png" width="50px" height="50px">Date Of Birth:</td>
												<td id="dob"><?php echo   $_SESSION["profile"][2];?></td>

											</tr>
											<tr>
												<td ><img src="imges/gender.png" width="50px" height="50px">Gender:</td>
												<td id="gender"><?php echo   $_SESSION["profile"][3];?></td>

											</tr>
											<tr>
												<td ><img src="imges/country.jpg" width="50px" height="50px">Country:</td>
												<td id="country"><?php echo   $_SESSION["profile"][4];?></td>

											</tr>
											<tr>
												<td><img src="imges/city.jpg" width="50px" height="50px">City :</td>
												<td id="city"><?php echo   $_SESSION["profile"][5];?></td>

											</tr>
											<tr>
												<td ><img src="imges/location.jpg" width="50px" height="50px">Address :</td>
												<td id="address"><?php echo   $_SESSION["profile"][6];?></td>

											</tr>
											<tr>
												<td><img src="imges/profession.png" width="50px" height="50px">Profession :</td>
												<td id="profession"><?php echo   $_SESSION["profile"][7];?></td>

											</tr>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>
				

				</body>
				</html>
