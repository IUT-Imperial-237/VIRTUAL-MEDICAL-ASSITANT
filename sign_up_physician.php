<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <link rel="stylesheet" href="font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="projects.css">
  <link rel="stylesheet" type="text/css" href="sign_up_physician.css">
  
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
        <a class="navbar-brand" href="index.html"> Virtual Medical Assistant</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">

          <li><a href="index.html">Home</a></li>
          <li><a href="about_us.html">About Us</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Online Consultations <span
                class="caret"></span></a>
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
              <li class="active"><a href="sign_up_physician.php">Physician</a></li>
            </ul>
          </li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="media">
      <h1>DOCTOR SIGN UP</h1>
      <div class="col-lg-6">
        <img src="imges/boy-physician.png" alt="boy-physician" width="90%">
      </div>
      <div class="col-lg-5">
        <div id="doctor">
          <button class="btn" id="btn_field1" disabled>PERSON_INFOS</button>
          <button class="btn" id="btn_field2">DOCTOR_RECORD</button>
          <button class="btn" id="btn_field3" disabled>REGISTER</button><br><br>
          <form action="">
            <fieldset id="field1">
              <label for="fname">First Name:</label><br>
              <input type="text" name="" id="fname" required><br>
              <label for="lname">Last Name:</label><br>
              <input type="text" name="" id="lname" required><br>
              <label for="dob">Date Of Birth:</label><br>
              <input type="date" name="" id="dob" required><br>
              <label for="gender">Gender:</label><br>
              <select name="" id="gender"><br>
                <option>Male</option>
                <option>Female</option>
              </select><br>
              <label for="country">Country:</label><br>
              <select>
                <option value="Bangladesh">Bangladesh</option>
              </select><br>
              <label for="city">City:</label><br>
              <select name="" id="city">
                <option>Barisal</option>
                <option>Chittagong</option>
                <option>Comilla</option>
                <option>Dhaka</option>
                <option>Gazipur</option>
                <option>Khulna</option>
                <option>Mymensingh</option>
                <option>Narayanganj</option>
                <option>Rajshahi</option>
                <option>Rangpur</option>
                <option>Sylhet</option>
              </select><br>
              <label for="address">Address:</label><br>
              <input type="text" name="" id="address" required><br>
              <label for="profession">Profession:</label><br>
              <input type="text" name="" id="profession" required><br>
            </fieldset>

            <fieldset id="field2">
              <label class="custom-file-label" for="customFile">Your Certificate:</label><br>
              <input type="file" name="" id="customFile" name="filename" required><br>
              <label for="period-start">Available Period Start:</label><br>
              <select name="" id="period-start">
                <option>0am</option>
                <option>1am</option>
                <option>2am</option>
                <option>3am</option>
                <option>4am</option>
                <option>5am</option>
                <option>6am</option>
                <option>7am</option>
                <option>8am</option>
                <option>9am</option>
                <option>10am</option>
                <option>11am</option>
                <option>12am</option>
                <option>1pm</option>
                <option>2pm</option>
                <option>3pm</option>
                <option>4pm</option>
                <option>5pm</option>
                <option>6pm</option>
                <option>7pm</option>
                <option>8pm</option>
                <option>9pm</option>
                <option>10pm</option>
                <option>11pm</option>
              </select><br>
              <label for="period-end">Available Period End:</label><br>
              <select name="" id="period-end">
                <option>0am</option>
                <option>1am</option>
                <option>2am</option>
                <option>3am</option>
                <option>4am</option>
                <option>5am</option>
                <option>6am</option>
                <option>7am</option>
                <option>8am</option>
                <option>9am</option>
                <option>10am</option>
                <option>11am</option>
                <option>12am</option>
                <option>1pm</option>
                <option>2pm</option>
                <option>3pm</option>
                <option>4pm</option>
                <option>5pm</option>
                <option>6pm</option>
                <option>7pm</option>
                <option>8pm</option>
                <option>9pm</option>
                <option>10pm</option>
                <option>11pm</option>
              </select><br>
              <label for="current_hopital">Current Hospital:</label>
              <input type="text" id="current_hopital" required>
              <label for="registration_number">Registration No:</label>
              <input type="number" id="registration_number" required>
            </fieldset>

            <fieldset id="field3">
              <label for="email">Email address:</label><br>
              <input type="email" name="" id="email" placeholder="example@gmail.com" required><br>
              <label for="pwd">Password:</label><br>
              <input type="password" name="" id="pwd" required><br>
              <label for="conpwd">Confirm Password:</label><br>
              <input type="password" name="" id="conpwd" required><br><br>
              <input type="submit" name="" value ="Sign Up">

            </fieldset>
          </form>
        </div>

      </div>


    </div>
  </div>


  <div class="media">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-3">
        <hr>
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
        <a href=""><img src="imges/facebook.png" alt="facebook" width="50px" height="50px"
            style="margin-right: 20px;margin-left:30px;"></a>
        <a href=""><img src="imges/In.png" alt="In" width="50px" height="50px" style="margin-right: 20px;"></a>
        <a href=""><img src="imges/instagram.png" alt="instagram" width="50px" height="50px"></a>
      </div>
    </div>
    <div class="row">

      <div class="col-sm-12">
        <hr style="position: relative;top: -70px;">
      </div>

    </div>
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-9">
        <h4 style="position: relative;top: -150px;">Terms & Conditions, Policy & Procedure, Disclaimer, © 2019 Virtual
          Medical Assistant</h5>

      </div>

    </div>
    <script  type="text/javascript" src="sign_up_physician.js"></script>
</body>

</html>