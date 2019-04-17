<?php
   session_start() ;

   // define variables and set to empty values
   $fname=$lname=$dob= $gender=$country=$city= $address=$profession=$allergies=$blood_group =$height=$weight=$family_medical_history ="";
   $medical_history=$present_medical_condition=$present_medical_prescription=$extra_information=$email=$password= $conpwd1="";
    
    $fname = test_input($_POST["fname"]);
      $lname = test_input($_POST["lname"]);
     $dob = test_input($_POST["dob"]);
     $gender = test_input($_POST["gender"]);
     $country = test_input($_POST["country"]);
     $city = test_input($_POST["city"]);
     $address = test_input($_POST["address"]);
     $profession = test_input($_POST["profession"]);
     $allergies = test_input($_POST["allergies"]);
     $blood_group = test_input($_POST["blood_group"]);
     $height = test_input($_POST["height"]);
     $weight = test_input($_POST["weight"]);
     $family_medical_history = test_input($_POST["family_medical_history"]);
     $medical_history = test_input($_POST["medical_history"]);
     $present_medical_condition = test_input($_POST["present_medical_condition"]);
     $present_medical_prescription = test_input($_POST["present_medical_prescription"]);
     $extra_information = test_input($_POST["extra_information"]);
     $username1 = $_POST["email"];
     
     $password =  $_POST["password"];
     $conpwd1 = $_POST["conpwd"];
   
     $_SESSION["eremail"]="";
     $_SESSION["erpwd"] ="";
      $_SESSION["erlen"]="";
      $_SESSION["tt"] ="";
      $flag1 = 0;
      $flag2 = 0;
      $flag3 = 0;
     if ($password !=  $conpwd1){
      $flag1 =1;
       $_SESSION["erpwd"] = "the password did not match";
       $_SESSION["tt"] ="Please correct the following error*"; 
          
         }
         if (strlen($password)<6){
          $flag2 =1;
          $_SESSION["tt"] ="Please correct the following error*"; 
          $_SESSION["erlen"] = "the password must be at least 6 characters";
               
             
            }
        verify_email ( $username1);
        if ($flag1 || $flag2 || $flag3)
        {
          header("location: sign_up_patient.php");
        }



        $servername = "localhost";
        $username = "abdelkader";
        $password1 = "gelanyboy";
        $dbname = "test";
      
                 // Create connection
        $conn = new  mysqli($servername, $username, $password1, $dbname);
      
                     // Check connection
        if ($conn->connect_error)
       {
          die("Connection failed: " . $conn->connect_error);
       } 
     
        $user =$_POST["email"];
        $sql1 = "INSERT INTO patientrecord (patientId, allergy, bloodGroup, height, weight, familyMedicalHistory, personalMedicalHistory, extraInfos) VALUES ('$user','$allergies','$blood_group',$height,$weight,'$family_medical_history','$medical_history','$extra_information')  ";
         $sql2 ="INSERT INTO personinfo(firstName, lastName, dob, gender, country, city, address, profession, phone, email) VALUES ('$fname','$lname','$dob','$gender','$country','$city','$address','$profession','x-x-x','$user') ";
         $sql3 = "INSERT INTO users(username, password, userType) VALUES ('$user','$conpwd1','p') ";
      
       $result1 = $conn->query($sql1);
       $result2 = $conn->query($sql2);
       $result3 = $conn->query($sql3);
        if($result1 && $result2 && $result3){
           
           header("location: confirmed.php?user=$user&pin=$conpwd1");

        }
        else{
          header("location: sign_up_patient.php");
        }

   
     function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
     }
   
   
    
   
   
   
  
   function verify_email ($u)
   {
     $servername = "localhost";
     $username = "abdelkader";
     $password1 = "gelanyboy";
     $dbname = "test";
   
              // Create connection
     $conn = new  mysqli($servername, $username, $password1, $dbname);
   
                  // Check connection
     if ($conn->connect_error)
    {
       die("Connection failed: " . $conn->connect_error);
    } 
    
     
     $sql = "SELECT *   FROM users where username ='$u'  ";
    
     $result = $conn->query($sql);
     
      $_SESSION["eremail"] ="aly";
     

     
     if ($result->num_rows > 0) 
    {
      $_SESSION["tt"] ="Please correct the following error*"; 
         $_SESSION["eremail"] = "this email is already used";
    
       $flag3 =1;
    }
  
     
   }           
   ?>