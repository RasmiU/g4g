<?php
$user_name="root";
$password ="";
$server ="localhost";
$db_handle =mysqli_connect($server, $user_name, $password,"blood");
if (!$db_handle)  {
                   die('Could not Connect : ' . mysqli_error());
                  }

else
             {
              $SQL ="SELECT *  FROM donorslist WHERE Department = '$_POST[department]' AND  BloodGroup = '$_POST[bloodgroup] '";
              $select_query = mysqli_query($db_handle,$SQL);
              echo "<TABLE Border = 1>";
              echo "<TR>";
              echo "<TH Colspan=10> <U><CENTER> DONORS LIST</U> </CENTER> </TH>";
              echo "</TR>";
              echo "<TR>";
              echo "<TD>Number</TD>";
              echo "<TD>Firstname</TD>";
              echo "<TD>Lastname</TD>";
              echo "<TD>Gender</TD>";
              echo "<TD>Blood Group</TD>";
              echo "<TD>Age</TD>";
              echo "<TD>Weight</TD>";     
              echo "<TD>Department</TD>";
              echo "<TD>MobileNumber</TD>";
              echo "<TD>MailID</TD>";                     
              echo "</TR>";
              while($record = mysqli_fetch_array($select_query)){
              echo "<TR>";
              echo "<TD>" .$record['SI_No'] . "</TD>";
              echo "<TD>" .$record['FirstName'] . "</TD>";
              echo "<TD>" .$record['LastName'] . "</TD>";
              echo "<TD>" .$record['Gender'] . "</TD>";
              echo "<TD>" .$record['BloodGroup'] . "</TD>";
              echo "<TD>" .$record['Age'] . "</TD>";
              echo "<TD>" .$record['Weight'] . "</TD>";
              echo "<TD>" .$record['Department'] . "</TD>";
              echo "<TD>" .$record['PhoneNumber'] . "</TD>";
              echo "<TD>" .$record['MailID'] . "</TD>";
              echo "</TR>";}
              echo "</TABLE>";
              }
mysqli_close($db_handle);
?>
   