 <?php
$servername = "localhost";
$username = "pal541";
$password = "Yuvaan@2020";
$dbname = "QNA";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>
