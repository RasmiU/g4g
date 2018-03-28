<?php
$user_name = "root";
$password = "";
$server ="localhost";
$db_handle = mysqli_connect($server, $user_name, $password, "blood");
if (!$db_handle)  {
                   die('Could not Connect : ' . mysqli_error());
                  }
else
             {
              $SQL = "CREATE TABLE donorslist (SI_No INT PRIMARY KEY AUTO_INCREMENT, FirstName VARCHAR(20), LastName VARCHAR(20), Gender VARCHAR(20), BloodGroup VARCHAR(20) , Department VARCHAR(20), Age VARCHAR(20), Weight VARCHAR(20), PhoneNumber INT, MailID VARCHAR(20))";  
              $select_query = mysqli_query($db_handle, $SQL);
              if(mysqli_query($db_handle, $SQL))
              {
               echo "Table creates successfully";
              }
              else{
               echo "error" . mysqli_error($db_handle);}
              }
mysqli_close($db_handle);
?>



