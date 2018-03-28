<?php
$user_name = "root";
$password = "";
$server ="localhost";
$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$gender =$_POST['gender'];
$bloodgroup =$_POST['bloodgroup'];
$department =$_POST['department'];
$age =$_POST['age'];
$weight =$_POST['weight'];
$phonenumber =$_POST['phonenumber'];
$mailid =$_POST['mailid'];
$db_handle = mysqli_connect($server, $user_name, $password, "blood");
if (!$db_handle)  {
                   die('Could not Connect : ' . mysqli_error());
                  }
else
             {

              $SQL = "INSERT INTO donorslist (FirstName, LastName, Gender, BloodGroup, Department, Age, Weight, PhoneNumber, MailID) VALUES ('$firstname','$lastname','$gender','$bloodgroup','$department','$age','$weight','$phonenumber','$mailid')";
             
              }
  if(mysqli_query($db_handle, $SQL))
              {
               echo "VALUES INSERTED SUCCESSFULLY";
              }
  else{
               echo "error" . mysqli_error($db_handle);}
header("refresh:2; url=donate.html");
              
mysqli_close($db_handle);
?>
