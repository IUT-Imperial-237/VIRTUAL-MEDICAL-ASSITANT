<?php 
session_start() ;

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="sign.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <link rel="stylesheet" href="font-awesome.min.css">
  
  <link rel="stylesheet" type="text/css" href="projects.css">
  <style>
  .confirmed{
    text-align:left;
	background-color: rgba(0, 0, 0, 0.9);
	border: 8px inset blue;
    color :white;
    margin-top:55px;
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
          <li><a href="blog.php">Blog</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sign Up<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="sign_up_patient.php">Patient</a></li>
              <li><a href="sign_up_physician.php">Physician</a></li>
            </ul>
          </li>
          <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container marg">

</div>


<div class="container">
<div class= "row" >
<div class="col-sm-4"></div>
<div class="col-sm-4 confirmed">
<h3>Account created successfully </h3>
<p>username&nbsp;:&nbsp;&nbsp;<?php echo $_GET["user"];?></p>
<p>password&nbsp;: &nbsp;&nbsp;<?php echo $_GET["pin"];?></p>
<a href="index.html">return to home</a>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php">Login</a>
<br><br><br>
</div>
<div class="col-sm-4"></div>
</div>
</div>



<div class="media">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-3"><hr>
      <h2>EXPLORE.</h2><br><br>
      <h4><a href="index.html">Home</a></h4>
      <h4><a href="emergency_care.html">Emergency Care</a></h4>
      <h4><a href="symptoms.html">Symptoms</a></h4>
      <h4><a href="video_consultation.html">Video Consultation</a></h4>
      <h4><a href="audio_consultation.html">Audio Consultation</a></h4>
      <h4><a href="login.php">Sign In</a></h4>
    </div>
    <div class="col-sm-4">
      <hr>
      <h2>GET IN TOUCH.</h2><br>
      <img src="imges/location.jpg" alt="location" width="40px" height="40px">
      <span>Islamic University of Technology Bangladesh</span><br><br>
      <img src="imges/email.png" alt="email" width="40px" height="40px">
      <span>abdelkarim@iut-dhaka.edu</span><br><br>
      <img src="imges/phone.png" alt="phone" width="40px" height="40px">
      <span>+88001796267219/+8800182438617</span><br><br>
      <a href=""><img src="imges/facebook.png" alt="facebook" width="50px" height="50px" style="margin-right: 20px;margin-left:30px;"></a>
      <a href=""><img src="imges/In.png" alt="In" width="50px" height="50px" style="margin-right: 20px;"></a>
      <a href=""><img src="imges/instagram.png" alt="instagram" width="50px" height="50px"></a>
    </div>
  </div>
  <div class="row">

   <div class="col-sm-12"><hr style="position: relative;top: -70px;">
   </div>

 </div>
 <div class="row">
  <div class="col-sm-3">
  </div>
  <div class="col-sm-9">
    <h4 style="position: relative;top: -150px;">Terms & Conditions, Policy & Procedure, Disclaimer, © 2019 Virtual Medical Assistant</h5>

    </div>

  </div>
</div>

</body>
</html>