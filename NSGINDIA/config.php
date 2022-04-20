<?php
include("connect.php");
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $dob = $_POST['dob'];
 $address = $_POST['address'];
 $occupation = $_POST['occupation'];
 $city = $_POST['city'];
 $comments = $_POST['comments'];
 
 
 $sql = "INSERT INTO Persons (fname, lname, email, dob, address, occupation, city, comments)
VALUES ('$fname', '$lname', '$email','$dob', '$address', '$occupation', '$city', '$comments')";

if ($conn->query($sql) === TRUE) {
      echo '<script type="text/javascript">
      alert("Form Submitted Successfully!!");
      
      </script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
       
echo '<script type="text/JavaScript">  
     alert("Form Successfully Submitted..."); 
     </script>' 
        
?>